<?php
ob_start();
$API_KEY = '5196632960:AAH1Nj3znvzsbp3VnL2Po1l0Pe2-PYfOycc'; #توكن البوت
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
####لوحة الادمن###
$admin = "5296043472"; ###ايديك###
$ARMOF = file_get_contents("ARMOF.txt");
$ARMOF0 = file_get_contents("ARMOF0.txt");
$ARMOF1= file_get_contents("ARMOF1.txt");
$ARMOF5 = file_get_contents("ARMOF2.txt");
$ARMOF6 = file_get_contents("ARMOF3.txt");
$ARMOF20 = json_decode(file_get_contents('php://input'));
$ARMOF18 = $update->message;
$ARMOF13 = $ARMOF18->chat->id;
$ARMOF17 = $ARMOF18->text;
$ArMoFD = $ARMOF20->callback_query->data;
$ARMOF12 = $ARMOF20->callback_query->message->chat->id;
$ARMOF14 =  $ARMOF20->callback_query->message->message_id;
$ARMOF15 = $ARMOF18->from->first_name;
$ARMOF16 = $ARMOF18->from->username;
$ARMOF11 = $ARMOF18->from->id;
$ARMOF2 = explode("\n",file_get_contents("ARMOF4.txt"));
$ARMOF3 = count($ARMOF2)-1;
if ($ARMOF18 && !in_array($ARMOF11, $ARMOF2)) {
file_put_contents("ARMOF4.txt", $ARMOF11."\n",FILE_APPEND);
  }
$ARMOF9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ARMOF0&user_id=".$ARMOF11);
$ARMOF10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ARMOF1&user_id=".$ARMOF11);
if($ARMOF18 && (strpos($ARMOF9,'"status":"left"') or strpos($ARMOF9,'"Bad Request: USER_ID_INVALID"') or strpos($ARMOF9,'"status":"kicked"') or strpos($ARMOF10,'"status":"left"') or strpos($ARMOF10,'"Bad Request: USER_ID_INVALID"') or strpos($ARMOF10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$ARMOF13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$ARMOF0.'
'.$ARMOF1,
]);return false;}
if($ARMOF17 == "/admin" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>"مرحبآ بك ،  [$fn]
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$php_aba->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
] 
])
]);
}
if($ArMoFD == "ARMOF" ){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
"text"=>"  • مرحبا بك ، [$Name]
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
] 
])
]);
unlink("ARMOF.txt");
}
if($ArMoFD == "ARMOF0"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF0");
}
if($ARMOF17 and $ARMOF == "ARMOF0" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF0.txt","$ARMOF17");
unlink("ARMOF.txt");
}
if($ArMoFD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF1'],
]
]])
]);
}
if($ArMoFD == "ARMOF1"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF0.txt");
}
if($ArMoFD == "ARMOF2"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF1");
}
if($ARMOF17 and $ARMOF == "ARMOF1" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF1.txt","$ARMOF17");
unlink("ARMOF.txt");
}
if($ArMoFD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF3'],
]
]])
]);
}
if($ArMoFD == "ARMOF3"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF1.txt");
}
if($ArMoFD == "ARMOF4"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $ARMOF0 📢 
- القناة الثانية ،  $ARMOF1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($ArMoFD == "ARMOF5"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $ARMOF3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF2");
}
if($ARMOF18 and $ARMOF == "ARMOF2" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ARMOF2); $i++){
bot('forwardMessage', [
'chat_id'=>$ARMOF2[$i],
'from_chat_id'=>$ARMOF11,
'message_id'=>$ARMOF18->message_id
]);
unlink("ARMOF.txt");
}
}
if($ArMoFD == "ARMOF6"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $ARMOF3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF3");
}
if($ARMOF17 and $ARMOF == "ARMOF3" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ARMOF2); $i++){
bot('sendMessage', [
'chat_id'=>$ARMOF2[$i],
'text'=>$ARMOF17
]);
unlink("ARMOF.txt");
}
}
if($ArMoFD == "ARMOF7"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>"- عدد مشتركين البوت  [ $ARMOF3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($ArMoFD == "ARMOF9"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF2.txt","ARMOF");
}
if($ARMOF17 == "/start" and $ARMOF5 == "ARMOF" and $ARMOF11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$ARMOF15](tg://user?id=$u_nss) ، 🦕
- المعرف ، [@$ARMOF16](tg://user?id=$u_nss) ، 🐢
- الايدي ، [$ARMOF11](tg://user?id=$u_nss) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $ARMOF3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($ArMoFD == "ARMOF10"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF2.txt");
}
if($ArMoFD == "ARMOF11"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF3.txt","ARMOF");
}
if($ARMOF18 and $ARMOF6 == "ARMOF" and $ARMOF11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$ARMOF11,
'message_id'=>$ARMOF18->message_id
]);
}
if($ARMOF18 and $ARMOF6 == "ARMOF" and $ARMOF11 == $admin){
bot('sendMessage',[
'chat_id'=>$ARMOF18->reply_to_message->forward_from->id,
'text'=>$ARMOF17,
]);
}
if($ArMoFD == "ARMOF12"){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF3.txt");
} 
 if($text == "/start"){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"http://www.daily-quran.com/static/quran.jpg",
'caption'=>"*
- بسم الله الرحمن الرحيم 

- اهلا بك في بوت القرآن الكريم
- يقوم البوت بجلب صفحات القرآن صفحة صفحة
- كل ما عليك هوه ارسال رقم الصفحة لاقوم بجلبه بشكل صورة لك .،
- ارسل الارقام باللغة الانكليزية (1.2..4..الخ)
------‐------------------------
- نسألكم الدعاء @oggoo❤
-------------------------------*
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• استمع الى القرآن",'callback_data'=>"show"]],
[['text'=>"• تصفح القرآن",'callback_data'=>"1@1"]],
]
])
]);
}
if($data == "back"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
]);
bot('sendphoto',[
'chat_id'=>$chat_id2,
'photo'=>"http://www.daily-quran.com/static/quran.jpg",
'caption'=>"*
- بسم الله الرحمن الرحيم 

- اهلا بك في بوت القرآن الكريم
- يقوم البوت بجلب صفحات القرآن صفحة صفحة
- كل ما عليك هوه ارسال رقم الصفحة لاقوم بجلبه بشكل صورة لك .،
- ارسل الارقام باللغة الانكليزية (1.2..4..الخ)
• يمكنك الاستماع الى السور ايضا
------‐------------------------
- نسألكم الدعاء 
-------------------------------*
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• استمع الى القرآن",'callback_data'=>"show"]],
[['text'=>"• تصفح القرآن",'callback_data'=>"1@1"]],
]
])
]);
}
 if($data == "show"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
]);
bot('sendphoto',[
'chat_id'=>$chat_id2,
'photo'=>"http://www.daily-quran.com/static/quran.jpg",
'caption'=>"*
- بسم الله الرحمن الرحيم 

- اهلا بك في بوت القرآن الكريم
- يقوم البوت بجلب صفحات القرآن صفحة صفحة
- كل ما عليك هوه ارسال رقم الصفحة لاقوم بجلبه بشكل صورة لك .،
- ارسل الارقام باللغة الانكليزية (1.2..4..الخ)
------‐------------------------
- نسألكم الدعاء @oggoo❤
-------------------------------*
",'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الانتقال الى الموقع",'url'=>"https://www.daily-quran.com/quran/page/1.jpg"]],
[["text"=>"سورة الفاتحة","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/001.mp3"],["text"=>"سورة البقرة","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/002.mp3"]],
[["text"=>"  سورة آل عمران","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/003.mp3"],["text"=>"سورة النساء","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/004.mp3"]],
[["text"=>"سورة المائدة","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/005.mp3"],["text"=>"سورة الأنعام","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/006.mp3"]],
[["text"=>"سورة الأعراف","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/007.mp3"],["text"=>"سورة الأنفال","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/008.mp3"]],
[["text"=>" سورة التوبة","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/009.mp3"],["text"=>"سورة يونس","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/010.mp3"]],
[["text"=>"  سورة هود","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/011.mp3"],["text"=>"سورة يوسف","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/012.mp3"]],
[["text"=>"سورة الرعد","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/013.mp3"],["text"=>"سورة إبراهيم","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/014.mp3"]],
[["text"=>"سورة النحل","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/016.mp3"],["text"=>"سورة الإسراء","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/017.mp3"]],
[["text"=>"سورة الكهف","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/018.mp3"],["text"=>"  سورة مريم","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/019.mp3"]],
[["text"=>"سورة طه","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/020.mp3"],["text"=>"سورة الأنبياء","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/021.mp3"]],
[["text"=>"سورة الحج","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/022.mp3"],["text"=>"سورة المؤمنون","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/023.mp3"]],
[["text"=>"سورة النّور","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/024.mp3"],["text"=>"سورة الفرقان","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/025.mp3"]],
[["text"=>"سورة الشعراء","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/026.mp3"],["text"=>"سورة النّمل","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/027.mp3"]],
[["text"=>"سورة القصص","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/028.mp3"],["text"=>"سورة العنكبوت","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/029.mp3"]],
[["text"=>"سورة الرّوم","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/030.mp3"],["text"=>"سورة لقمان","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/031.mp3"]],
[["text"=>"سورة السجدة","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/032.mp3"],["text"=>"سورة الأحزاب","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/033.mp3"]],
[["text"=>" سورة سبأ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/034.mp3"],["text"=>"سورة فاطر","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/035.mp3"]],
[["text"=>"سورة يس","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/036.mp3"],["text"=>"سورة الصافات","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/037.mp3"]],
[["text"=>"سورة ص","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/038.mp3"],["text"=>"سورة الزمر","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/039.mp3"]],
[["text"=>"سورة غافر","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/040.mp3"],["text"=>"سورة فصّلت","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/041.mp3"]],
[["text"=>"سورة الشورى","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/042.mp3"],["text"=>"سورة الزخرف","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/043.mp3"]],
[["text"=>"سورة الدّخان","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/044.mp3"],["text"=>"سورة الجاثية","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/045.mp3"]],
[["text"=>"سورة الأحقاف","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/046.mp3"],["text"=>"سورة محمد","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/047.mp3"]],
[["text"=>"سورة الفتح","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/048.mp3"],["text"=>"سورة الحجرات","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/049.mp3"]],
[["text"=>"سورة ق","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/050.mp3"],["text"=>"سورة الذاريات","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/051.mp3"],["text"=>"سورة الطور","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/052.mp3"]],[["text"=>"سورة الحجر","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/015.mp3"]],
[["text"=>"باقي السور","callback_data"=>"next"]],
[['text'=>"• تصفح القرآن",'callback_data'=>"1@1"]],

]
])
]);
}
if($data == "next"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
]);
bot('sendMessage',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"• تم استعراض جميع الايات المتبقية 
~ اضغط للاستمتاع 💡",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["text"=>"سورة النجم ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/053.mp3"],["text"=>"سورة القمر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/054.mp3"]],
[["text"=>"سورة الرحمن ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/055.mp3"],["text"=>"سورة الواقعة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/056.mp3"]],
[["text"=>"سورة الحديد ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/057.mp3"],["text"=>"سورة المجادلة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/058.mp3"]],
[["text"=>"سورة الحشر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/059.mp3"],["text"=>"سورة الممتحنة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/060.mp3"]],
[["text"=>"سورة الصف ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/061.mp3"],["text"=>"سورة الجمعة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/062.mp3"]],
[["text"=>"سورة المنافقون ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/063.mp3"],["text"=>"سورة التغابن ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/064.mp3"]],
[["text"=>"سورة الطلاق ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/065.mp3"],["text"=>"سورة التحريم ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/066.mp3"]],
[["text"=>"سورة الملك ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/067.mp3"],["text"=>"سورة القلم ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/068.mp3"]],
[["text"=>"سورة الحاقة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/069.mp3"],["text"=>"سورة المعارج ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/070.mp3"]],
[["text"=>"سورة نوح ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/071.mp3"],["text"=>"سورة الجن ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/072.mp3"]],
[["text"=>"سورة المزّمّل ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/073.mp3"],["text"=>"سورة المدّثر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/074.mp3"]],
[["text"=>"سورة القيامة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/075.mp3"],["text"=>"سورة الإنسان ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/076.mp3"]],
[["text"=>"سورة المرسلات ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/077.mp3"],["text"=>"سورة النبأ ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/078.mp3"]],
[["text"=>"سورة النازعات ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/079.mp3"],["text"=>"سورة عبس ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/080.mp3"]],
[["text"=>"سورة التكوير ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/081.mp3"],["text"=>"سورة الإنفطار ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/082.mp3"]],
[["text"=>"سورة المطفّفين ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/083.mp3"],["text"=>"سورة الإنشقاق ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/084.mp3"]],
[["text"=>"سورة البروج ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/085.mp3"],["text"=>"سورة الطارق ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/086.mp3"]],
[["text"=>"سورة الأعلى ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/087.mp3"],["text"=>"سورة الغاشية ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/088.mp3"],["text"=>"سورة الفجر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/089.mp3"]],
[["text"=>"سورة البلد ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/090.mp3"],["text"=>"سورة الشمس ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/091.mp3"]],
[["text"=>"سورة الليل ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/092.mp3"],["text"=>"سورة الضحى ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/093.mp3"]],
[["text"=>"سورة الشرح ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/094.mp3"],["text"=>"سورة التين ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/095.mp3"]],
[["text"=>"سورة العلق ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/096.mp3"],["text"=>"سورة القدر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/097.mp3"]],
[["text"=>"سورة البينة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/098.mp3"],["text"=>"سورة الزلزلة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/099.mp3"]],
[["text"=>"سورة العاديات ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/100.mp3"],["text"=>"سورة القارعة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/101.mp3"]],
[["text"=>"سورة التكاثر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/102.mp3"],["text"=>"سورة العصر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/103.mp3"]],
[["text"=>"سورة الهمزة ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/104.mp3"],["text"=>"سورة الفيل ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/105.mp3"]],
[["text"=>"سورة قريش ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/106.mp3"],["text"=>"سورة الماعون ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/107.mp3"]],
[["text"=>"سورة الكوثر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/108.mp3"],["text"=>"سورة الكافرون ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/109.mp3"]],
[["text"=>"سورة النصر ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/110.mp3"],["text"=>"سورة المسد ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/111.mp3"]],
[["text"=>"سورة الإخلاص ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/112.mp3"],["text"=>"سورة الفلق ","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/113.mp3"]],
[["text"=>"سورة النّاس","url"=>"https://server7.mp3quran.net/basit/Almusshaf-Al-Mojawwad/114.mp3"]],
[['text'=>"• تصفح القرآن",'callback_data'=>"1@1"]],
[["text"=>"• رجوع ","callback_data"=>"back"]],
]
])
]);
}

if($text < 10){
$num = $text+1;
$null = $text-1;
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://www.daily-quran.com/static/pages/page-00$text.jpg",
'caption'=>"*- تم العرض  للعرض من داخل الموقع،
- اضغط على الزر من الاسفل  نسألكم الدعاء .
------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الانتقال الى الموقع - ❤",'url'=>"https://www.daily-quran.com/quran/page/$text.jpg"]],
[['text'=>"• استمع الى القرآن",'callback_data'=>"show"]],
[['text'=>"• التالي",'callback_data'=>"1@$num"],['text'=>"• السابق",'callback_data'=>"1@$null"]],
[['text'=>"• رجوع",'callback_data'=>"back"]]
]
])
]);
}
if($text >= 10 and $text <100){
$num = $text+1;
$null = $text-1;
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://www.daily-quran.com/static/pages/page-0$text.jpg",
'caption'=>"*- تم العرض  للعرض من داخل الموقع،
- اضغط على الزر من الاسفل  نسألكم الدعاء .
------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الانتقال الى الموقع -❤",'url'=>"https://www.daily-quran.com/quran/page/0$text.jpg"]],
[['text'=>"• استمع الى القرآن",'callback_data'=>"show"]],
[['text'=>"• التالي",'callback_data'=>"1@$num"],['text'=>"• السابق",'callback_data'=>"1@$null"]],
[['text'=>"• رجوع",'callback_data'=>"back"]]
]
])
]);
}
if($text >= 100){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://www.daily-quran.com/static/pages/page-$text.jpg",
'caption'=>"*- تم العرض  للعرض من داخل الموقع،
- اضغط على الزر من الاسفل  نسألكم الدعاء .
------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"- الانتقال الى الموقع -❤",'url'=>"https://www.daily-quran.com/quran/page/$text.jpg"]],
[['text'=>"• استمع الى القرآن",'callback_data'=>"show"]],
[['text'=>"• التالي",'callback_data'=>"1@$num"],['text'=>"• السابق",'callback_data'=>"1@$null"]],
[['text'=>"• رجوع",'callback_data'=>"back"]]
]
])
]);
}
$ex = explode("@",$data);
if($ex[1] < 10 ){
$num = $ex[1]+1;
$null = $ex[1]-1;
bot('deleteMessage',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
]);
bot('sendphoto',[
'chat_id'=>$chat_id2,
'photo'=>"https://www.daily-quran.com/static/pages/page-00$ex[1].jpg",
'caption'=>"*- تم العرض  للعرض من داخل الموقع،
- اضغط على الزر من الاسفل  نسألكم الدعاء .
------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الانتقال الى الموقع -❤",'url'=>"https://www.daily-quran.com/quran/page/0$ex[1].jpg"]],
[['text'=>"• استمع الى القرآن",'callback_data'=>"show"]],
[['text'=>"• التالي",'callback_data'=>"1@$num"],['text'=>"• السابق",'callback_data'=>"1@$null"]],
[['text'=>"• رجوع",'callback_data'=>"back"]]
]
])
]);}
if($ex[1] >= 10 and $ex[1] <100){
$num = $ex[1]+1;
$null = $ex[1]-1;
bot('deleteMessage',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
]);
bot('sendphoto',[
'chat_id'=>$chat_id2,
'photo'=>"https://www.daily-quran.com/static/pages/page-0$ex[1].jpg",
'caption'=>"*- تم العرض  للعرض من داخل الموقع،
- اضغط على الزر من الاسفل  نسألكم الدعاء .
------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الانتقال الى الموقع -❤",'url'=>"https://www.daily-quran.com/quran/page/0$ex[1].jpg"]],
[['text'=>"• استمع الى القرآن",'callback_data'=>"show"]],
[['text'=>"• التالي",'callback_data'=>"1@$num"],['text'=>"• السابق",'callback_data'=>"1@$null"]],
[['text'=>"• رجوع",'callback_data'=>"back"]]

]
])
]);}
if($ex[1] >= 100){
$num = $ex[1]+1;
$null = $ex[1]-1;
bot('deleteMessage',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
]);
bot('sendphoto',[
'chat_id'=>$chat_id2,
'photo'=>"https://www.daily-quran.com/static/pages/page-0$ex[1].jpg",
'caption'=>"*- تم العرض  للعرض من داخل الموقع،
- اضغط على الزر من الاسفل  نسألكم الدعاء .
------------*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- الانتقال الى الموقع -❤",'url'=>"https://www.daily-quran.com/quran/page/0$ex[1].jpg"]],
[['text'=>"• استمع الى القرآن",'callback_data'=>"show"]],
[['text'=>"• التالي",'callback_data'=>"1@$num"],['text'=>"• السابق",'callback_data'=>"1@$null"]],
[['text'=>"• رجوع",'callback_data'=>"back"]]
]
])
]);
}
###                                                           ###
#                        @oggoo                             #
#THIS FILE WAS WRITTEN BY ARMOF #
#                        @php_aba                         #
###                                                           ###