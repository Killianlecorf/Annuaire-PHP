<div onclick="displayNoneFormUpdate()" id="fond-formUpdate"></div>
<section id="formUpdate" class="form-part">
    <div class="form-content">
        <div class="close-popup-form">
            <button class="close-popup" onclick="displayNoneFormUpdate()"><i id="close-form-croix" class="fa-solid fa-xmark"></i></button>
        </div>
        <h1>Modifier</h1>
        <form id="form-add" action="/annuaire/controller/UpdateController.php" method="POST">
            <label for="">Nom</label>
            <input name="update_user_name" type="text" placeholder="Nom" required>
            <label for="">prenom</label>
            <input name="update_user_lname" type="text" placeholder="Prénom" required>
            <label for="">E-mail</label>
            <input name="update_user_email" type="text" placeholder="Email" required>
            <label for="">Numéro</label>
            <input name="update_user_number" type="number" placeholder="Numéro" minlength="10" required>
            <label for="">Spécialité</label>
            <input name="update_user_spe" type="text" placeholder="Spécialité" required>
            <input name="update_user_ID" type="hidden" id="user_ID_input" value="4">
            <input id="submit-button" type="submit">
        </form>
    </div>
</section>
<script src="../Annuaire/Assets/js/script.js"></script>
<script>console.log('2')
    const form = document.getElementById("formUpdate");
    const input = document.getElementById("user_ID_input");
    input.value = user_id ; 
    console.log(input);</script>
