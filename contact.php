<h2 class="col-span-6 text-3xl lg:text-4xl">Contact</h2>
<div class="line col-span-6"></div>
<div class="bgtitle">CONTACT</div>
<form id='formulaire' name="contact" method="POST" action="index.php#formulaire" class="contact__form col-start-2 col-end-6">
    <div class="contact__form">
        <div class="contact__form__part">
            <label>Prénom</label>
            <input name="prenom" id="prenom" type="text" class="contact__form__part__input">
        </div>
        <div class="contact__form__part">
            <label>Nom</label>
            <input name="nom" id="nom" type="text" class="contact__form__part__input">
        </div>
    </div>
    <div class="contact__form">
        <div class="contact__form__part">
            <label>E-Mail</label>
            <input name="mail" id="mail" type="email" class="contact__form__part__input">
        </div>
        <div class="contact__form__part">
            <label>Sujet</label>
            <input name="sujet" id="sujet" type="text" class="contact__form__part__input">
        </div>
    </div>
    <div class="contact__form__part">
        <label>Votre message</label>
        <textarea name="message" id="message" class="contact__form__part__input contact__form__part__input--texta"></textarea>
    </div>
    <div>
        <button id="sub" name="btnsubmit" type="submit" value="Envoyer" class="contact__form__part__input w-full py-2 my-2 hover:bg-gray-300">Envoyer</button>
    </div>
    <div class="msgfix">
        <?php if(isset($msg)){echo $msg;}?>
    </div>
</form>