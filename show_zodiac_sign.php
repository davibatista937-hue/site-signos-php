
<?php
include('layouts/header.php');

$signoEncontrado = null;
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dataNascimento = $_POST['data_nascimento'] ?? '';

    $data = DateTime::createFromFormat('!Y-m-d', $dataNascimento);
    $errosData = DateTime::getLastErrors();

    if (
        !$data ||
        ($errosData !== false &&
        ($errosData['warning_count'] > 0 || $errosData['error_count'] > 0)) ||
        $data->format('Y-m-d') !== $dataNascimento
    ) {
        $erro = 'Por favor, informe uma data válida.';
    } else {

        $diaMes = (int) $data->format('md');
        $arquivoXml = __DIR__ . '/signos.xml';

        if (file_exists($arquivoXml)) {
            $signos = simplexml_load_file($arquivoXml);

            if ($signos !== false) {
                foreach ($signos->signo as $signo) {

                    $inicio = DateTime::createFromFormat(
                        '!d/m',
                        (string) $signo->dataInicio
                    );

                    $fim = DateTime::createFromFormat(
                        '!d/m',
                        (string) $signo->dataFim
                    );

                    if ($inicio && $fim) {
                        $inicioNumero = (int) $inicio->format('md');
                        $fimNumero = (int) $fim->format('md');

                        if ($inicioNumero <= $fimNumero) {
                            $dentroDoPeriodo =
                                $diaMes >= $inicioNumero &&
                                $diaMes <= $fimNumero;
                        } else {
                            $dentroDoPeriodo =
                                $diaMes >= $inicioNumero ||
                                $diaMes <= $fimNumero;
                        }

                        if ($dentroDoPeriodo) {
                            $signoEncontrado = $signo;
                            break;
                        }
                    }
                }

                if ($signoEncontrado === null) {
                    $erro = 'Não foi possível encontrar seu signo.';
                }
            } else {
                $erro = 'Não foi possível ler o arquivo XML.';
            }
        } else {
            $erro = 'O arquivo signos.xml não foi encontrado.';
        }
    }
} else {
    $erro = 'Envie sua data de nascimento pelo formulário.';
}
?>

<div class="container">
    <div class="card-signo text-center">

        <?php if ($signoEncontrado !== null): ?>

            <h1 class="titulo-principal mb-3">
                Seu signo é
                <?= htmlspecialchars((string) $signoEncontrado->signoNome) ?>!
            </h1>

            <p class="text-muted">
                Data de nascimento:
                <?= htmlspecialchars($data->format('d/m/Y')) ?>
            </p>

            <p class="mt-4">
                <?= htmlspecialchars((string) $signoEncontrado->descricao) ?>
            </p>

        <?php else: ?>

            <h1 class="titulo-principal mb-3">
                Ops!
            </h1>

            <div class="alert alert-danger">
                <?= htmlspecialchars($erro) ?>
            </div>

        <?php endif; ?>

        <a href="index.php" class="btn btn-signo w-100 py-2 mt-3">
            Voltar
        </a>

    </div>
</div>

</body>
</html>
