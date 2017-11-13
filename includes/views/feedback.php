<!--ОТображение обратной связи-->

<?php render('_header',array('title'=>$title))?>

<hr>
<div class="feedback_container">
    <?php render($feedback) ?>
    <p>Хотите задать вопрос? ;) Заполните контактную форму и МЫ ответим на ВАШИ вопросы!</p>

    <form method="POST" id="feedback-form">
        Введите Ваше имя:
        <input type="text" name="nameFF" required placeholder="Имя" x-autocompletetype="name">
        Ваш Email для связи:
        <input type="email" name="contactFF" required placeholder="email" x-autocompletetype="email">
        Введите Ваше сообщение:
        <textarea name="messageFF" required placeholder="Мы ответим Вам как можно быстрее!" required rows="5"></textarea>
        <input type="submit" value="Отправить">
    </form>
</div>
<?php render('_footer')?>