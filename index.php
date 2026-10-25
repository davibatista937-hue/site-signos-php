
<?php include('layouts/header.php'); ?>

<div class="container">
    <div class="card-signo text-center">

        <h1 class="titulo-principal mb-3">
            Descubra seu Signo
        </h1>

        <p class="text-muted mb-4">
            Informe sua data de nascimento e descubra
            qual é o seu signo do zodíaco.
        </p>

        <form id="signo-form"
              method="POST"
              action="show_zodiac_sign.php">

            <div class="mb-4 text-start">
                <label for="data_nascimento" class="form-label">
                    Data de nascimento
                </label>

                <input
                    type="date"
                    class="form-control"
                    id="data_nascimento"
                    name="data_nascimento"
                    required
                >
            </div>

            <button type="submit" class="btn btn-signo w-100 py-2">
                Descobrir meu signo
            </button>

        </form>

    </div>
</div>

</body>
</html>
