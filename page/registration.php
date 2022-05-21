<main class="main">
    <section class="head">
        <h2 class="head__title"><?= $pageTitle ?></h2>
        <p class="head__date"><?= $pageDate ?> </p>
    </section>
    <form action="./includes/user-reg.php" class="form" method="post" enctype="multipart/form-data">
        <label class="form__label">
            <span class="form__text">Логин</span>
            <input type="text" class="form__input" name="login" autocomplete="off">
        </label>
        <label class="form__label">
            <span class="form__text">Имя</span>
            <input type="text" class="form__input" name="name" autocomplete="off">
        </label>
        <label class="form__label">
            <span class="form__text">Пароль</span>
            <input type="password" class="form__input" name="pass">
            <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
        </label>
        <label class="form__label">
            <span class="form__text">Повторите пароль</span>
            <input type="password" class="form__input" name="confirmpass">
            <button type="button" class="form__eye"><i class="far fa-eye-slash"></i></button>
        </label>
        <span class="form__error">* Пароли не совподают</span>
        <p><input type="file" name="photo" accept="image/jpeg, image/jpg, image/png"></p>
        <!-- <div class="custom-file custom-file-img">
            <input type="file" class="custom-file-input input_passport_2" id="passport_2" name="passport_2" accept="image/jpeg, image/jpg, image/png" required="">
            <label for="passport_2" class="custom-file-label custom-file-img-label label_passport_2">
                <img src="default-preview.jpg" class="img_passport_2" id="img_passport_2" alt="<span>Нажмите <br> для загрузки</span><span>Фото прописки или обратной стороны ID карты*</span>">
                <span class="img-thumbnail-text"><span>Namuna singari pasportni old qismini<br>
                    </span>joylang<span>

                    </span>joylashtirish uchun bosing</span>
                <button type="button" class="standard-button standard-button-small image-cancel-button" id="passport_2">
                    <span id="passport_2">
                        <i class="fa-solid fa-x"></i>
                    </span>
                </button>
            </label>
        </div> -->

        <br>
        <button class="form__btn" disabled>Зарегистрироваться</button>
    </form>
</main>