<div class="review-pop-up review-pop-up_feedback" id="feedback">
    <!-- <div class="overlay show"></div> -->
    <div class="review-pop-up__inner">
        <div class="review-pop-up__left">
            <form action="" method="POST" class="form js-validate-form">
                <h3 class="dispaly display_size_big review-pop-up__title">
                    Запись на прием
                </h3>
                <p class="review-pop-up__subtitle">
                    Администратор клиники с радостью ответит <br>на ваши вопросы и запишет к нужному специалисту.
                </p>
                <div class="row review-pop-up__row">
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="userName" class="form__label"> Ваше имя:*</label>
                            <input type="text" class="input review-pop-up__input" id="userName" data-required
                                placeholder="Введите Ваше имя">
                        </div>
                    </div>
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="userPhone" class="form__label">Ваш телефон:*</label>
                            <input type="tel" class="input review-pop-up__input phone-mask" id="userPhone" data-required
                                data-phone placeholder="8-910-555-55-55">
                        </div>
                    </div>
                </div>
                <div class="row review-pop-up__row">
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="specializaciya" class="form__label">Выбрать специализацию:</label>
                            <div class="select-wrapper">
                                <select name="specializaciya" class="input review-pop-up__input" id="specializaciya">
                                    <option value="Лимфология">Лимфология</option>
                                    <option value="Лимфология">Лимфология</option>
                                    <option value="Лимфология">Лимфология</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="specialist" class="form__label">Специалист:</label>
                            <div class="select-wrapper">
                                <select name="specialist" class="input review-pop-up__input" id="specialist">
                                    <option value="Специалист">Специалист</option>
                                    <option value="Специалист">Специалист</option>
                                    <option value="Специалист">Специалист</option>
                                    <option value="Специалист">Специалист</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row review-pop-up__row">
                    <div class="form__group form__group_mb">
                        <label for="serviceType" class="form__label">Выбрать услугу:</label>
                        <div class="select-wrapper">
                            <select name="serviceType" class="input review-pop-up__input" id="serviceType">
                                <option value="Услуга">Услуга</option>
                                <option value="Услуга">Услуга</option>
                                <option value="Услуга">Услуга</option>
                                <option value="Услуга">Услуга</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row review-pop-up__row">
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="date" class="form__label">Выбрать удобную дату:</label>
                            <input type="text" class="input review-pop-up__input" id="date" data-date data-time
                                placeholder="Например 18.12.2019">
                        </div>
                    </div>
                    <div class="form__half review-pop-up__half">
                        <div class="form__group form__group_mb">
                            <label for="time" class="form__label">Введите удобное время</label>
                            <input type="text" class="input review-pop-up__input phone-mask" id="time" data-time
                                placeholder="Например 14:00">
                        </div>
                    </div>
                </div>
                <div class="row row_align-center review-pop-up__action">
                    <input type="submit" class="btn-fill review-pop-up__btn-fill" value="Оставить отзыв">
                    <p class="form__policy">
                        Нажимая "Оформить заказ", Вы даёте Согласие <br>на обработку Ваших персональных данных
                        <br>и
                        принимаете <a href="#">Пользовательское соглашение</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="review-pop-up__right"
            style="background-image: url(img/static/modal-bg.png);background-position-y: bottom;">
            <div class="badge review-pop-up__badge">
                <div class="badge__name">
                    Алена
                </div>
                <div class="badge__position">
                    администратор
                </div>
            </div>
        </div>
        <button class="close review-pop-up__close">
            <svg class="icon" width="42" height="42" viewBox="0 0 42 42">
                <use xlink:href="img/symbol_sprite.svg#icon-close"></use>
            </svg>
        </button>
    </div>
</div>