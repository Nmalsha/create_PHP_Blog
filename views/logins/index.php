<section class="container-fluid actualite">
    <div class="container">
        <div class="row">

        <aside class="col-9">

            <form method="post" action="/logins" >
                <div class="formwrapp">
                    <div class="col-8 width">
                        <h1 class="form_action">Connectez - vous</h1>
                        <label for="identi" class="form-label">Identifiant</label>
                        <input type="text" class="form-control" name="username" aria-describedby="id-help">

                    </div>
                    <br>
                    <div class="col-8 width">
                        <label for="password" class="form-label">Mot de Pass</label>
                        <input type="password" class="form-control"  name="password" aria-describedby="password-help">

                    </div>
                    <br>
                        <button type="login" name= "login" class="btn btn-primary btn_style">Envoyer</button>
                            <p> pas inscrit ? <a href="/signups">Inscrez-vous</a>
                <div>

            <?php
// error handling

if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyInput") {
        echo "<p>Remplieez tous les champs</p>";

    } else if ($_GET["error"] == "wronglogin") {
        echo "<p>Indentifiant/motdepass invalide</p>";
    }

}
?>


            </form>

        </aside>
        </div>
    </div>
</section>