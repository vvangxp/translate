<?php 

 return [
     "shop-order-payment" => [
     "title" => "Принять оплату",
     "sample" => "Ваш платеж в размере 267 долларов США успешно выполнен.<br> Заказ: СМ-425<br> Спасибо, <b>Ваше имя магазина</b> .<br> продано",
     "body" => "Ваш платеж :param2 успешно выполнен. Порядок: :param1 Спасибо, :param3. продано",
     "description" => "Отправьте сообщение покупателю магазина, чтобы сообщить об успешной оплате.",
],
     "shop-order-payment-admin" => [
     "title" => "Принять оплату",
     "sample" => "Новый платеж на 267$ успешно проведен.<br> Заказ: СМ-425<br> Спасибо, <b>Ваше имя магазина</b> .<br> продано",
     "body" => "Новый платеж :param2 успешно проведен. Порядок: :param1 Спасибо, :param3. продано",
     "description" => "Отправьте сообщение владельцу магазина, чтобы сообщить ему об успешной оплате.",
],
     "vendor-new-order" => [
     "title" => "Поставщик Новый заказ",
     "sample" => "Вы получили новый заказ на сумму 200 долларов.<br> Заказ: SM-870 от <b>имени поставщика</b> .",
     "body" => "Вы получили новый заказ :param2. Заказ: :param1 для :param3.",
     "description" => "Отправьте сообщение продавцу, чтобы сообщить ему о новом заказе.",
],
     "shop-login" => [
     "title" => "Код подтверждения входа",
     "sample" => "Ваш код входа: <b>123456</b><br> <b>Название вашего магазина</b><br> продано",
     "body" => "Ваш код входа: :param1 :param2 Selldone",
     "description" => "Отправьте клиенту код входа для входа в магазин.",
],
     "user-login" => [
     "title" => "Сообщение об успешном входе",
     "sample" => "Дорогое <b>имя</b> ,<br> Вы вошли в свою учетную запись с помощью <b>iPhone 165.250.300.1</b> <b>08.05.2021 9:14</b> .<br> продано",
     "body" => "Уважаемый :param1, Вы вошли в свою учетную запись :param2 в :param3. продано",
     "description" => "Отправьте сообщение после входа клиента в магазин.",
],
     "avocado-order-submit" => [
     "title" => "Новый заказ авокадо отправлен покупателю",
     "sample" => "<b>Название вашего магазина</b><br> Дорогой <b>Ваше имя</b> ,<br> Мы получили ваш заказ и рассматриваем его.<br> Заказ №: <b>АВО-246</b><br> продано",
     "body" => ":param3 Уважаемый :param1, Мы получили ваш заказ и рассматриваем его. Заказ №: :param2 Продан",
     "description" => "Отправьте сообщение клиенту после оформления заказа на авокадо.",
],
     "avocado-order-submit-seller" => [
     "title" => "Авокадо получить новый заказ отправить продавцу",
     "sample" => "Вы получили заказ на авокадо:<br> Магазин: <b>Название вашего магазина</b><br> Покупатель: <b>Имя покупателя</b><br> Заказ: <b>АВО-246</b><br> продано",
     "body" => "Вы получили заказ на авокадо: Магазин: :param1 Покупатель: :param2 Заказ: :param3 Selldone",
     "description" => "Отправьте сообщение владельцу магазина, чтобы сообщить ему о получении нового заказа на авокадо.",
],
     "avocado-ready-to-pay" => [
     "title" => "Заказ авокадо готов к оплате",
     "sample" => "<b>Название вашего магазина</b><br> Ваш заказ подтвержден и может быть оплачен по следующей ссылке.<br> Заказ №: <b>АВО-246</b><br> Ссылка: <b>https://ваш-домен/avocado</b><br> продано",
     "body" => ":param3 Ваш заказ подтвержден и может быть оплачен по следующей ссылке. Заказ №: :param2 Ссылка: :param1 Продано",
     "description" => "После того, как продавец установит стоимость и подтвердит заказ на авокадо, отправьте покупателю сообщение со ссылкой на оплату.",
],
];