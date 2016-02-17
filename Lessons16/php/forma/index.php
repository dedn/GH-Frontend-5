<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>home work 3</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>  
	<div id="wrapper" class="animate">
		<form method="post">
			<fieldset class="fieldset1">   
				<legend>Коротко о себе</legend>
				<p><label for="firstname">Имя: </label><input type="text" name="firstname" id="firstname" /></p>
				<p><label for="lastname">Фамилия: </label><input type="text" name="lastname" id="lastname"/></p>
				<p>Пол: <label><input type="radio" name="man_or_woman"   value="man" checked="checked" class="input" />Мужской</label> <label><input type="radio" name="man_or_woman"  value="woman" />Женский </label></p>
				<p><label for="age">Возраст: </label><input type="text" name="age" id="age"  /><label for="age"> лет</label></p>
			</fieldset>
			<fieldset class="fieldset2">
				<legend>Подробней о себе</legend>
				<p><label>Молодой человек<input type="radio" name="man_or_woman_Block_podrobney" value="man Block podrobney" checked="checked" /></label></p>
				<p><label>Девушка<input type="radio" name="man_or_woman_Block_podrobney" value="woman Block podrobney" /></label></p>
				<p><input type="text" name="Date_of_Birth" id="Date_of_Birth" /><label for="Date_of_Birth"> Дата рождения</label></p>
				<p><input type="text" name="family_status" id="family_status" /><label for="family_status"> Семейное положение</label></p>
				<p><input type="text" name="social_status" id="social_status" /><label for="social_status"> Социальный статус</label></p>
				<p><input type="text" name="location" id="location" /><label for="location"> Местожительства</label></p>
				<p class="header">Что вы обычно делаете на выходных</p>
				<p><input type="checkbox" name="weekend[]" value="Сплю" id="sleep" /><label for="sleep"> Сплю</label></p> 
				<p><input type="checkbox" name="weekend[]" value="Гуляю с друзьями" id="Walking_with_friends" /><label for="Walking_with_friends"> Гуляю с друзьями</label></p>
				<p><input type="checkbox" name="weekend[]" value="Хожу на рыбалку" id="fishing" /><label for="fishing"> Хожу на рыбалку</label></p>
				<p><input type="checkbox" name="weekend[]" value=" Играю в игры" id="play" /><label for="play"> Играю в игры</label></p>
				<p class="header">Рассказать о формах в книге, посвящённой HTML:</p>
				<p>
					<select name="select">
						<option>Site frequency:</option>
					</select>
				</p>
				<p class="header">Сколько книг вы прочли за свою жизнь:</p>
				<p><label><input type="radio" name="book" value="0-10" />0-10</label></p>
				<p><label><input type="radio" name="book" value="11-20" />11-20</label></p>
				<p><label><input type="radio" name="book" value="21-50" />21-50</label></p>
				<p><label><input type="radio" name="book" value="50" />50+</label></p>
				
				<p class="header">Ваши коментарии:</p>
				<textarea name="textarea" rows="10" cols="40"></textarea>
				<p>
					<select size="3" multiple="multiple" name="select2[]"> 
						<option value="one">Первая позиция:</option> 
						<option value="two" selected="selected" >Вторая позиция:</option> 
						<option value="three">Третья позиция:</option>
					</select>
				</p>
			</fieldset>
			<fieldset class="fieldset3">
				<legend>И в заключение</legend>
				<input type="text" name="hide" value=" Это поле было введено до вас" readonly="readonly" />
				<p class="headerset3"><label for="emaillabel">Email:</label></p> 
				<input type="text" name="email" id="emaillabel" />
				<p class="headerset3">Хотите подписаться на самую модную рассылку спама?</p> 
				<i> Выберите категории</i>
				<p><input type="checkbox" name="chekboxone[]" value="Оборудование" id="equipment" /><label for="equipment"> Оборудование</label></p>
				<p><input type="checkbox" name="chekboxone[]" value="Как приготовить обеды" id="lunches" /><label for="lunches"> Как приготовить обеды</label></p>
				<p><input type="checkbox" name="chekboxone[]" value="Заработай миллион за два дня" id="milion" /><label for="milion"> Заработай миллион за два дня!</label></p>
				<p class="header">На сколько сложная задача:</p>
				<p><label><input type="radio"  name="level" value="Совсем нет" checked="checked" />Совсем нет</label></p>
				<p><label><input type="radio"  name="level" value="Так себе<" />Так себе</label></p>
				<p><label><input type="radio"  name="level" value="Еле справился" />Еле справился</label></p>
			</fieldset>
			<p><input type="submit" value="Отправить" /></p>
		</form>
		<div class="answer">
			<div class="about">
			    <?php
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$man_or_woman = $_POST['man_or_woman'];
					$age = $_POST['age'];
				    echo'<p>Ваше имя и фамилия:' . $firstname . ' ' . $lastname . '</p>' .'<p>Вы ' . $man_or_woman . ' и вам ' . $age . '</p>';
				?>
			</div>
			<div class="your-details">
				<h3>Подробнее о вас: </h3>
				<?php
					$man_or_woman_Block_podrobney = $_POST['man_or_woman_Block_podrobney'];
					$Date_of_Birth = $_POST['Date_of_Birth'];
					$family_status = $_POST['family_status'];
					$social_status = $_POST['social_status'];
					$location = $_POST['location'];
					$weekend = $_POST['weekend'];
					$select = $_POST['select'];
					$book = $_POST['book'];
					$textarea = $_POST['textarea'];
					$select2 = $_POST['select2'];
					echo'<p>Вы '. $man_or_woman_Block_podrobney . '</p>' .
						'<p>Дата рождения: ' . $Date_of_Birth . '</p>' .
						'<p>Семейное положение: ' . $family_status . '</p>' .
						'<p>Социальный статус: ' . $social_status . '</p>' .
						'<p>Местожительство: ' . $location . '</p>' .
						'<p>Обычно на выходных вы: </p>';
						if(empty($weekend)) {
							echo("-");
						}
						else {
							$N = count($weekend);
							for($i=0; $i < $N; $i++) {
								echo($weekend[$i] . "; ");
							}
						}
					echo'<p>Вы выбрали: ' . $select . '</p>' .
						'<p>За свою жизнь вы прочитали ' . $book. ' книг </p>' .
						'<p>Ваш коментарий: ' . $textarea . '</p>' .
						'<p>Ваши позиции: </p>';
						if (is_array($select2) || is_object($select2)) {foreach ($select2 as $selectedOption)echo $selectedOption . "; ";
						}
					 ?>
			</div>

			<div class="last">
				<h3>Заключение: </h3>
				<?php
					
					$email = $_POST['email'];
					$chekboxone = $_POST['chekboxone'];
					$level = $_POST['level'];

					echo'<p>Email: ' . $email . '</p>' .
						
						'<p>Вы подписались на такую рассылку категорий: </p>';
						if(empty($chekboxone)) {
							echo("-");
						}
						else {
							$N = count($chekboxone);
							for($i=0; $i < $N; $i++) {
								echo($chekboxone[$i] . "; ");
							}
						}
						
					 echo'<p>Была ли сложная задача? ' . $level . '</p>';
				?>
					
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script src="js/jquery.1.7.1.min.js"></script>
	<script>
	new WOW().init();
    $(addAnimClasses)
    function addAnimClasses() {
        
        $('.animate').addClass('zoomIn wow').attr('data-wow-delay', '.1s');
        $('p').addClass('fadeInDown wow').attr('data-wow-delay','.7s' );
       
    }
	
	</script>
</body>
</html>


