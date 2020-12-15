<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="styles/php_test.css">
    <script src="https://kit.fontawesome.com/2a92cacf3a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Stalinist+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=IBM+Plex+Sans:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@700&display=swap" rel="stylesheet">

</head>
<div class="name_logo">
    <h1 href="index.html">BikeSpravochnik</h1>
</div>
<div id="main">
    <div class="container">
        <div class="row main-form">
            <form name="test" action="check.php"  method="post" >

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Ваше имя:</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="far fa-user" aria-hidden="false"></i></span>
                            <input type="text" class="form-control" name="name" id="name" required minlength="3" maxlength="15"  placeholder="Введите ваше имя" "/>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">В какой области проживаете:</label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-city" aria-hidden="false"></i></i></span>
                        <select name="region">

                            <option disabled  selected value="Выбрать">Выбрать</option>
                            <option value="Киевская область">Киевская область</option>
                            <option  value="Винницкая область">Винницкая область</option>
                            <option value="Волынская область">Волынская область</option>
                            <option value="Днепропетровская область">Днепропетровская область</option>
                            <option value="Донецкая область">Донецкая область</option>
                            <option value="Житомирская область">Житомирская область</option>
                            <option value="Закарпатская область">Закарпатская область</option>
                            <option value="Запорожская область">Запорожская область</option>
                            <option value="Ивано-Франковская область">Ивано-Франковская область</option>
                            <option value="Кировоградская область">Кировоградская область</option>
                            <option value="Луганская область">Луганская область</option>
                            <option value="Львовская область">Львовская область</option>
                            <option value="Николаевская область">Николаевская область</option>
                            <option value="Одесская область">Одесская область</option>
                            <option value="Полтавская область">Полтавская область</option>
                            <option value="Ровненская область">Ровненская область</option>
                            <option value="Сумская область">Сумская область</option>
                            <option value="Тернопольская область">Тернопольская область</option>
                            <option value="Харьковская область">Харьковская область</option>
                            <option value="Херсонская область">Херсонская область</option>
                            <option value="Хмельницкая область">Хмельницкая область</option>
                            <option value="Черкасская область">Черкасская область</option>
                            <option value="Черниговская область">Черниговская область</option>
                            <option value="Черновецкая область">Черновецкая область</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Пройденная дистанция в этом году</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-edit" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="distance" id="distance" placeholder="в км" required minlength="2" maxlength="15"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="strava" class="cols-sm-2 control-label">Ссылка на аккаунт в Strava</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fab fa-strava" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="strava" id="strava" placeholder="www.strava.com/athletes/your_id"  />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="cols-sm-2 control-label">Ваш основной велосипед</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fas fa-bicycle"></i></span>
                            <input type="text" class="form-control" name="bike" id="bike" placeholder="фирма, модель" required minlength="2" maxlength="15" />
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label class="cols-sm-2 control-label">Основной стиль катания: </label><br>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fas fa-biking"></i></span>
                            <select  name="style" >

                                <option disabled  selected value="Выбрать">Выбрать</option>
                                <option value="Кросс-кантри">Кросс-кантри</option>
                                <option  value="Шоссе">Шоссе</option>
                                <option value="Даунхилл">Даунхилл</option>
                                <option value="Триал">Триал</option>
                                <option value="Дёрт">Дёрт</option>
                                <option value="Фрирайд ">Фрирайд </option>
                                <option value="Эндуро">Эндуро</option>
                                <option value="Смешаный">Смешаный</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="form-group ">
                   <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Подтвердить</button>

                </div>

            </form>
        </div>
    </div>

</div>
<body>

</body>
</html>