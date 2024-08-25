<?php 

 return [
     "shop-order-payment" => [
     "title" => "קבל תשלום",
     "sample" => "התשלום שלך בסך 267$ הוסדר בהצלחה.<br> הזמנה: SM-425<br> תודה, <b>שם החנות שלך</b> .<br> סלדון",
     "body" => "התשלום שלך :param2 הוסדר בהצלחה. הזמנה: :param1 תודה, :param3. סלדון",
     "description" => "שלח הודעה ללקוח החנות כדי ליידע על תשלום מוצלח.",
],
     "shop-order-payment-admin" => [
     "title" => "קבל תשלום",
     "sample" => "תשלום חדש בסך 267$ הוסדר בהצלחה.<br> הזמנה: SM-425<br> תודה, <b>שם החנות שלך</b> .<br> סלדון",
     "body" => "תשלום חדש :param2 הוסדר בהצלחה. הזמנה: :param1 תודה, :param3. סלדון",
     "description" => "שלח הודעה לבעל החנות כדי ליידע אותם על התשלום המוצלח.",
],
     "vendor-new-order" => [
     "title" => "הזמנה חדשה של ספק",
     "sample" => "קיבלת הזמנה חדשה של $200.<br> הזמנה: SM-870 מאת <b>שם הספק</b> .",
     "body" => "קיבלת הזמנה חדשה :param2. הזמנה: :param1 עבור :param3.",
     "description" => "שלח הודעה לספק כדי ליידע אותם על הזמנה חדשה.",
],
     "shop-login" => [
     "title" => "קוד אימות כניסה",
     "sample" => "קוד הכניסה שלך הוא: <b>123456</b><br> <b>שם החנות שלך</b><br> סלדון",
     "body" => "קוד הכניסה שלך הוא: :param1 :param2 Seldone",
     "description" => "שלח קוד כניסה ללקוח כדי להיכנס לחנות.",
],
     "user-login" => [
     "title" => "הודעת כניסה להצלחה",
     "sample" => "<b>שם</b> יקר,<br> התחברת לחשבונך באמצעות <b>iPhone 165.250.300.1</b> ב-5/8/2021 בשעה <b>9:14</b> .<br> סלדון",
     "body" => "היקר :param1, נכנסת לחשבון שלך על ידי :param2 בכתובת :param3. סלדון",
     "description" => "שלח הודעה לאחר כניסת הלקוח לחנות.",
],
     "avocado-order-submit" => [
     "title" => "הזמנה חדשה של אבוקדו נשלחה שלח לקונה",
     "sample" => "<b>שם החנות שלך</b><br> <b>שמך</b> יקר,<br> קיבלנו את ההזמנה שלך ואנחנו בודקים אותה.<br> מספר הזמנה: <b>AVO-246</b><br> סלדון",
     "body" => ":param3 היקר :param1, קיבלנו את הזמנתך ואנחנו בודקים אותה. מספר הזמנה: :param2 Seldone",
     "description" => "שלחו הודעה ללקוח לאחר ביצוע הזמנת אבוקדו.",
],
     "avocado-order-submit-seller" => [
     "title" => "אבוקדו מקבל הזמנה חדשה נשלח למוכר",
     "sample" => "קיבלת הזמנת אבוקדו:<br> חנות: <b>שם החנות שלך</b><br> קונה: <b>שם הקונה</b><br> הזמנה: <b>AVO-246</b><br> סלדון",
     "body" => "קיבלת הזמנת אבוקדו: חנות: :param1 קונה: :param2 הזמנה: :param3 Seldone",
     "description" => "שלח הודעה לבעל החנות כדי להודיע לו על קבלת הזמנת אבוקדו חדשה.",
],
     "avocado-ready-to-pay" => [
     "title" => "הזמנת אבוקדו מוכנה לתשלום",
     "sample" => "<b>שם החנות שלך</b><br> ההזמנה שלך אושרה וניתן לשלם אותה דרך הקישור הבא.<br> מספר הזמנה: <b>AVO-246</b><br> קישור: <b>https://your-domain/avocado</b><br> סלדון",
     "body" => ":param3 ההזמנה שלך אושרה וניתן לשלם אותה דרך הקישור הבא. הזמנה מס': :param2 קישור: :param1 Seldone",
     "description" => "שלחו הודעה עם קישור התשלום ללקוח לאחר שהמוכר קבע עלות ואשר את הזמנת האבוקדו שלו.",
],
];