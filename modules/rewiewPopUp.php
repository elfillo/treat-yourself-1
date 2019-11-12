<div class="review-pop-up" id="review-pop-up">
    <!-- <div class="overlay show"></div> -->
    <div class="review-pop-up__inner">
        <div class="review-pop-up__left">
            <form action="" method="POST" class="form js-validate-form" enctype="multipart/form-data">
                <h3 class="dispaly display_size_big review-pop-up__title">
                    Оставьте ваш отзыв
                </h3>
                <div class="row review-pop-up__row">
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <span class="form__label">Поставьте оценку</span>
                            <div class="rating">
                                <div id="rateYo" style="margin: 10px auto"></div>
                                <!-- Сюда магическим образом попадает рейтинг-->
                                <input type="text" class="rating__input" id="ratingValue" name="rating">
                            </div>
                        </div>
                    </div>
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <span class="form__label">Загрузить фотографии</span>
                            <div class="files-upload">
                                <label for="file1" class="files-upload__label js-labelFile">
                                    <input type="file" id="file1" class="input-upload">
                                </label>
                                <label for="file2" class="files-upload__label js-labelFile">
                                    <input type="file" id="file2" class="input-upload">
                                </label>
                                <label for="file3" class="files-upload__label js-labelFile">
                                    <input type="file" id="file3" class="input-upload">
                                </label>
                                <label for="file4" class="files-upload__label js-labelFile">
                                    <input type="file" id="file4" class="input-upload">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row review-pop-up__row">
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="userName" class="form__label">Имя*</label>
                            <input type="text" class="input review-pop-up__input" id="userName" data-required>
                        </div>
                    </div>
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="userPhone" class="form__label">Телефон*</label>
                            <input type="tel" class="input review-pop-up__input phone-mask" placeholder="+7 (..."
                                id="userPhone" data-required>
                        </div>
                    </div>
                </div>
                <div class="form__group form__group_mb">
                    <label for="userMessage" class="form__label">Отзыв*</label>
                    <textarea class="textarea review-pop-up__textarea" id="userMessage" name="userMessage"
                        data-required></textarea>
                </div>
                <div class="row row_align-center review-pop-up__action">
                    <input type="submit" class="btn-fill review-pop-up__btn-fill js-submit"
                        value="Оставить отзыв" data-submit>
                    <p class="form__policy">
                        Нажимая "Оформить заказ", Вы даёте Согласие <br>на обработку Ваших персональных данных
                        <br>и
                        принимаете <a href="#">Пользовательское соглашение</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="review-pop-up__right">
            <p>
                В случае некачественного обслуживания, <br>либо при других имеющихся замечаниях и  <br>предложениях, связанных с работой  <br>нашего медицинского центра, просьба  <br>обращаться по телефону:
                <a href="tel:84912300317" class="contact-phone contact-phone_small review-pop-up__contact-phone">
                    +7 (4912) 300‒317
                </a>
            </p>
        </div>
        <button class="close review-pop-up__close">
            <svg class="icon" width="42" height="42" viewBox="0 0 42 42">
                <use xlink:href="img/symbol_sprite.svg#icon-close"></use>
            </svg>
        </button>
    </div>
</div>