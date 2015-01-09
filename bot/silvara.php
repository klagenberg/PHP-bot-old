<?php session_start();
include('include.php');
if($_POST['submit'] == NULL){
	destroy_session();
}
/*if(isset($_SESSION['talk_page'])){
	header('talk.php');
}*/



include('header.php'); //site design
if(isset($_POST['terminate'])){
	destroy_session();
}
if($_POST['submit'] == NULL){
	if($random == '1'){
		echo 'haven',"'",'t I seen you before?
		<input name="talk" type="text" />
		<input name="log" type="hidden" value="haven',"'",'t I seen you before?"/>
		';
	}elseif($random == '2'){
		echo 'is this your first time here?
		<input name="log" type="hidden" value="is this your first time here?"/>
		<input name="talk" type="text" />';
	}else{
		echo 'you seem familiar, do I know you?
		<input name="log" type="hidden" value="you seem familiar, do I know you?"/>
		<input name="talk" type="text" />';
	}
}
echo '<form method="post" action="silvara.php">';
if($_POST['submit'] == NULL){
}
elseif(!isset($_SESSION['name'])){
	if($random == '1'){
		echo 'It must have slipped my mind, what was your name again?
		<input name="name" type="text" />
		';
	}elseif($random == '2'){
		echo 'ok, sweetie, would you mind telling me your name?
		<input name="name" type="text" />';
	}else{
		echo 'what should I call you? I personally think dinner sounds great <br />are you suddenly getting hungry too?
		<input name="name" type="text" />';
	}
}elseif(!isset($_SESSION['species'])){
	if($random == '1'){
		echo $_SESSION['name']."'".'s a nice name sweetie, I'."'".'m Silvara<br /> would you mind telling me what species you are?
		<input name="species" type="text" />';
	}elseif($random == '2'){
		echo $_SESSION['name']." that's an adorable name, and I think it fits you nicely, sweetie.<br />
		sorry for asking but what are your species?
		".'<input name="species" type="text" />';
	}else{
		echo $_SESSION['name']." that's a pretty good name<br />
		I I would have settled for calling you dinner instead<br />
		oh well, I'll just pretend that ".$_SESSION['name']." is the main part of an exotic dish<br />
		I'm gonna need to know your species cutie?".
		'<input name="species" type="text" />
		<input name="oralvore" type="hidden" />';
	}
}elseif(!isset($_SESSION['gender'])){
	if($random == '1'){
		echo 'this is going to sound stupid, but are you male or female?
		<input name="gender" type="text" />';
	}elseif($random == '2'){
		echo 'she looks you over, obviously confused "I see that you'."'".'re a '.$_SESSION['species'].' but I really can'."'".'t tell your gender<br />so are you male or female?
		<input name="gender" type="text" />';
	}elseif($random == '3'){
		echo 'ohh nice a '.$_SESSION['species'].', I'."'".'m gonna give you a little extra bacause it'."'".'s been too long since I last tasted a '.$_SESSION['species'].'
		say are you a male or a female? I hope you'."'".'re a female, in my exparience females taste so much sweeter. 
		<input name="gender" type="text" />
		<input name="oralvore" type="hidden" />';
	}else{
		echo 'aaawww you'."'".'re a '.$_SESSION['species'].'<br />she grabs you with both hands around your head before pulling you closer to her
		<br /> would you puhleeese let me unbirth you, '.$_SESSION['species'].' just has the cutest young ones and I'."'".'m sure you would just be the cutest child.</ br>
		say, when I give birth to you as my newborn, would you rather be a male or a female?
		<input name="gender" type="text" />
		<input name="unbirth" type="hidden" />';
	}
}else{
	if(isset($_SESSION['unbirth'])){
		'I'."'".'m looking forward to feeling you pushing around inside my birthchannel. <br />
		she gently guides your head down making sure you get a good feel of the soft fur on her chest and belly before finally ending down in front of her hips, watching as her labia slowly opens <br />
		don'."'".'t worry sweetie, I'."'".'m sure you will fit right in. And to think that I will have a cute little'.$_SESSION['species'].' to watch over, feed you and care about you
		she dreamily squeezes one of her nipples while mumbling something about breastfeeding.<br />
		so, sweetie, wanna do some foreplay first or shall we get to the fun fart right away?';
	}
	elseif(isset($_SESSION['oralvore'])){
		echo'sorry if I'."'".'m drooling '.$_SESSION['name'].', I was just thinking how it would feel having your '.$_SESSION['species'].' body entering my gabing maw before slowly sliding down my throat.<br/ >
		she grabs you, opens her mouth, making sure you get a gool long view of her now wide open and drooling mouth';
		if($_SESSION['gender'] == 'female'){
			echo 'I'."'".'m glad you'."'".'re a female, they are just tastier';	
		}
			if($_SESSION['gender'] == 'male'){
			echo 'oh well, you'."'".'re a male, don'."'".'t worry '.$_SESSION['name'].'. You'."'".'re a meal fit for a king';	
		}
		echo 'so, would you please please step over here and undress, so I really can enjoy you, my meal';
	}
	elseif($random == '1'){
		echo 'thanks for letting me know, I'."'".'m going to have so much fun with you, ',$_SESSION['name'],'.
		it'."'".'s been far too long since I'."'".'ve played with a  '.$_SESSION['species'].' and a cute '.$_SESSION['gender'].' to boot, I'."'".'m one lucky female<br />
		she settles down next to you with a happy sigh and a smile on her face,
		pushing herself close to you and resting her head on your chest while thinking of all the fun you two are going to have.';
	}elseif($random == '2'){
		echo 'ohh, ',$_SESSION['name'],'. you'."'".'re a  ',$_SESSION['gender'].' '-$_SESSION['species'].'?<br />it'."'".'s. How do I put this, perfect.<br />
		she pulls you close holding you close whilke gently pushing her snout against the back of your neck.<br />
		if this is a dream, I don'."'".'t want to wake up.';
	}elseif($random == '3'){
		echo 'well, I'."'".'m not sure if you know,',$_SESSION['name'],' but is it true that the taste of a ',$_SESSION['gender'],' ',$_SESSION['species'],' is a delight for ones senses?<br />
		she sends you a smile before giving you a view of the inside of her mouth while slowly amd sensually letting her tongue move around before licking you.<br />
		so, feel like letting me explore if the rest of you is just as tasty?';
	}else{
		echo 'thanks for telling me, so you are ',$_SESSION['name'],'. a ',$_SESSION['gender'],' ',$_SESSION['species'],'?<br />Is that correct?';
	}
	echo '<br />restart? <input name="terminate" type="submit" value="terminate" />
	or <a href="talk.php">continue</a>';
	dumpinfo('log.html');
}
		
	echo '<input name="submit" type="submit" value="submit" />
	</form><br />';
include('footer.php');
?>