<?php
if (! defined('mnmpath')) {
    include(dirname(__FILE__).'/../config.php');
    include(mnminclude.'html1.php');
}

header('Content-Type: text/html; charset=utf-8');
http_cache(86400*10); // 10 days cache

$menemojis = array(
			'angry' => 'angry.png',
			'blank' => 'blank.png',
			'cheesy' => 'cheesy.png',
			'confused' => 'confused.png',
			'cool' => 'cool.png',
			'cry' => 'cry.gif',
			'cunao' => 'cunao.png',
			'ffu' => 'ffu.png',
			'goatse' => 'goatse.png',
			'grin' =>'grin.png',
			'hug' => 'hug.png',
			'huh' => 'huh.png',
			'kiss' => 'kiss.gif',
			'lipssealed' => 'lipssealed.png',
			'lol' => 'lol.gif',
			'oops' => 'oops.png',
			'palm' => 'palm.png',
			'roll' => 'roll.gif',
			'sad' => 'sad.png',
			'shame' =>'shame.png',
			'shit' => 'shit.png',
			'shocked' => 'shocked.gif',
			'smiley' => 'smiley.png',
			'tongue' => 'tongue.png',
			'troll' => 'troll.png',
			'undecided' => 'undecided.png',
			'wall' => 'wall.gif',
			'wink' => 'wink.png',
			'wow' => 'wow.png',
			'coletas' => 'coletas.png',
			'eli' => 'eli.png',
			'foreveralone' => 'foreveralone.png',
			'pagafantas' => 'pagafantas.png',
			'popcorn' => 'popcorn.gif',
			'take' => 'takemymoney.png',
			'professor' => 'professor.png',
			'peineta' => 'peineta.png',
			'ferrari' => 'ferrari.png',
			'calzador' => 'calzador.png',
			'clap' => 'clap.gif',
			'tinfoil' => 'tinfoil.gif',
	);

$twemojis[_('gente')] = array(
"1f600", "1f601", "1f602", "1f603", "1f604", "1f605", "1f606", "1f607", "1f608", "1f609", "1f60a", "1f60b", "1f60c", "1f60d", "1f60e", "1f60f", "1f610", "1f611", "1f612", "1f613", "1f614", "1f615", "1f616", "1f617", "1f618", "1f619", "1f61a", "1f61b", "1f61c", "1f61d", "1f61e", "1f61f", "1f620", "1f621", "1f622", "1f623", "1f624", "1f625", "1f626", "1f627", "1f628", "1f629", "1f62a", "1f62b", "1f62c", "1f62d", "1f62e", "1f62f", "1f630", "1f631", "1f632", "1f633", "1f634", "1f635", "1f636", "1f637", "1f638", "1f639", "1f63a", "1f63b", "1f63c", "1f63d", "1f63e", "1f63f", "1f640", "1f645", "1f646", "1f647", "1f648", "1f649", "1f64a", "1f64b", "1f64c", "1f64d", "1f64e", "1f64f",

"1f440", "1f442", "1f443", "1f444", "1f445", "1f446", "1f447", "1f448", "1f449", "1f44a", "1f44b", "1f44c", "1f44d", "1f44e", "1f44f", "1f450", "1f451", "1f452", "1f453", "1f454", "1f455", "1f456", "1f457", "1f458", "1f459", "1f45a", "1f45b", "1f45c", "1f45d", "1f45e", "1f45f", "1f460", "1f461", "1f462", "1f463", "1f464", "1f465", "1f466", "1f467", "1f468", "1f469", "1f46a", "1f46b", "1f46c", "1f46d", "1f46e", "1f46f", "1f470", "1f471", "1f472", "1f473", "1f474", "1f475", "1f476", "1f477", "1f478", "1f479", "1f47a", "1f47b", "1f47c", "1f47d", "1f47e", "1f47f", "1f480", "1f481", "1f482", "1f483", "1f484", "1f485", "1f486", "1f487", "1f488", "1f489", "1f48a", "1f48b", "1f48c", "1f48d", "1f48e", "1f48f", "1f490", "1f491", "1f492", "1f493", "1f494", "1f495", "1f496", "1f497", "1f498", "1f499",

"261d",
); // gente

$twemojis[_('naturaleza')] = array(
"1f300", "1f301", "1f302", "1f303", "1f304", "1f305", "1f306", "1f307", "1f308", "1f309", "1f30a", "1f30b", "1f30c", "1f30d", "1f30e", "1f30f", "1f310", "1f311", "1f312", "1f313", "1f314", "1f315", "1f316", "1f317", "1f318", "1f319", "1f31a", "1f31b", "1f31c", "1f31d", "1f31e", "1f31f", "1f320", "1f330", "1f331", "1f332", "1f333", "1f334", "1f335", "1f337", "1f338", "1f339", "1f33a", "1f33b", "1f33c", "1f33d", "1f33e", "1f33f", "1f340", "1f341", "1f342", "1f343", "1f344", "1f345", "1f346", "1f347", "1f348", "1f349", "1f34a", "1f34b", "1f34c", "1f34d", "1f34e", "1f34f", "1f350", "1f351", "1f352", "1f353",
); // nature

$twemojis[_('comida')] = array (
"1f354", "1f355", "1f356", "1f357", "1f358", "1f359", "1f35a", "1f35b", "1f35c", "1f35d", "1f35e", "1f35f", "1f360", "1f361", "1f362", "1f363", "1f364", "1f365", "1f366", "1f367", "1f368", "1f369", "1f36a", "1f36b", "1f36c", "1f36d", "1f36e", "1f36f", "1f370", "1f371", "1f372", "1f373", "1f374", "1f375", "1f376", "1f377", "1f378", "1f379", "1f37a", "1f37b", "1f37c", "1f380", "1f381", "1f382", ); // food

$twemojis[_('cosas')] = array(
"1f383", "1f384", "1f385", "1f386", "1f387", "1f388", "1f389", "1f38a", "1f38b", "1f38c", "1f38d", "1f38e", "1f38f", "1f390", "1f391", "1f392", "1f393", "1f3a0", "1f3a1", "1f3a2", "1f3a3", "1f3a4", "1f3a5", "1f3a6", "1f3a7", "1f3a8", "1f3a9", "1f3aa", "1f3ab", "1f3ac", "1f3ad", "1f3ae", "1f3af", "1f3b0", "1f3b1", "1f3b2", "1f3b3", "1f3b4", "1f3b5", "1f3b6", "1f3b7", "1f3b8", "1f3b9", "1f3ba", "1f3bb", "1f3bc", "1f3bd", "1f3be", "1f3bf", "1f3c0", "1f3c1", "1f3c2", "1f3c3", "1f3c4", "1f3c6", "1f3c7", "1f3c8", "1f3c9", "1f3ca", "1f3e0", "1f3e1", "1f3e2", "1f3e3", "1f3e4", "1f3e5", "1f3e6", "1f3e7", "1f3e8", "1f3e9", "1f3ea", "1f3eb", "1f3ec", "1f3ed", "1f3ee", "1f3ef", "1f3f0",

"1f49a", "1f49b", "1f49c", "1f49d", "1f49e", "1f49f", "1f4a0", "1f4a1", "1f4a2", "1f4a3", "1f4a4", "1f4a5", "1f4a6", "1f4a7", "1f4a8", "1f4a9", "1f4aa", "1f4ab", "1f4ac", "1f4ad", "1f4ae", "1f4af", "1f4b0", "1f4b1", "1f4b2", "1f4b3", "1f4b4", "1f4b5", "1f4b6", "1f4b7", "1f4b8", "1f4b9", "1f4ba", "1f4bb", "1f4bc", "1f4bd", "1f4be", "1f4bf", "1f4c0", "1f4c1", "1f4c2", "1f4c3", "1f4c4", "1f4c5", "1f4c6", "1f4c7", "1f4c8", "1f4c9", "1f4ca", "1f4cb", "1f4cc", "1f4cd", "1f4ce", "1f4cf", "1f4d0", "1f4d1", "1f4d2", "1f4d3", "1f4d4", "1f4d5", "1f4d6", "1f4d7", "1f4d8", "1f4d9", "1f4da", "1f4db", "1f4dc", "1f4dd", "1f4de", "1f4df", "1f4e0", "1f4e1", "1f4e2", "1f4e3", "1f4e4", "1f4e5", "1f4e6", "1f4e7", "1f4e8", "1f4e9", "1f4ea", "1f4eb", "1f4ec", "1f4ed", "1f4ee", "1f4ef", "1f4f0", "1f4f1", "1f4f2", "1f4f3", "1f4f4", "1f4f5", "1f4f6", "1f4f7", "1f4f9", "1f4fa", "1f4fb", "1f4fc", "1f500", "1f501", "1f502", "1f503", "1f504", "1f505", "1f506", "1f507", "1f508", "1f509", "1f50a", "1f50b", "1f50c", "1f50d", "1f50e", "1f50f", "1f510", "1f511", "1f512", "1f513", "1f514", "1f515", "1f516", "1f517", "1f518", "1f519", "1f51a", "1f51b", "1f51c", "1f51d", "1f51e", "1f51f", "1f520", "1f521", "1f522", "1f523", "1f524", "1f525", "1f526", "1f527", "1f528", "1f529", "1f52a", "1f52b", "1f52c", "1f52d", "1f52e", "1f52f", "1f530", "1f531", "1f532", "1f533", "1f534", "1f535", "1f536", "1f537", "1f538", "1f539", "1f53a", "1f53b", "1f53c", "1f53d", "1f550", "1f551", "1f552", "1f553", "1f554", "1f555", "1f556", "1f557", "1f558", "1f559", "1f55a", "1f55b", "1f55c", "1f55d", "1f55e", "1f55f", "1f560", "1f561", "1f562", "1f563", "1f564", "1f565", "1f566", "1f567", "1f5fb", "1f5fc", "1f5fd", "1f5fe", "1f5ff",

); // things

$twemojis[_('animales')] = array(
"1f400", "1f401", "1f402", "1f403", "1f404", "1f405", "1f406", "1f407", "1f408", "1f409", "1f40a", "1f40b", "1f40c", "1f40d", "1f40e", "1f40f", "1f410", "1f411", "1f412", "1f413", "1f414", "1f415", "1f416", "1f417", "1f418", "1f419", "1f41a", "1f41b", "1f41c", "1f41d", "1f41e", "1f41f", "1f420", "1f421", "1f422", "1f423", "1f424", "1f425", "1f426", "1f427", "1f428", "1f429", "1f42a", "1f42b", "1f42c", "1f42d", "1f42e", "1f42f", "1f430", "1f431", "1f432", "1f433", "1f434", "1f435", "1f436", "1f437", "1f438", "1f439", "1f43a", "1f43b", "1f43c", "1f43d", "1f43e", ); // animals

$twemojis[_('transporte')] = array(
"1f680", "1f681", "1f682", "1f683", "1f684", "1f685", "1f686", "1f687", "1f688", "1f689", "1f68a", "1f68b", "1f68c", "1f68d", "1f68e", "1f68f", "1f690", "1f691", "1f692", "1f693", "1f694", "1f695", "1f696", "1f697", "1f698", "1f699", "1f69a", "1f69b", "1f69c", "1f69d", "1f69e", "1f69f", "1f6a0", "1f6a1", "1f6a2", "1f6a3", "1f6a4", "1f6a5", "1f6a6", "1f6a7", "1f6a8",
); // traffic


echo '<div class="emoji-kbd">';
echo '<ul class="emojiCat">';
echo '<li><a href="#" data-target="cat-meneame" class="emoji-tab active">mediatize</a></li>';

if (! $globals['mobile'] ) {
	foreach ($twemojis as $cat => $v) {
		echo '<li><a href="#" data-target="cat-'.$cat.'" class="emoji-tab">'.$cat.'</a></li>';
	}
}
echo '</ul>';

echo '<div id="cat-meneame" class="emoji-panel active">';
foreach ($menemojis as $k => $v) {
	echo '<img class="emoji-btn" data-emoji="'.$k.'" src="'.$globals['base_static'].'img/menemojis/36/'.$v.'" alt=":'.$k.':" title=":'.$k.':">';
}
echo '</div>';

if (! $globals['mobile'] ) {
	foreach ($twemojis as $cat => $values) {
		echo '<div id="cat-'.$cat.'" class="emoji-panel">';
		foreach ($values as $v) {
			echo '<img class="emoji-btn" data-emoji="0x'.$v.'" src="'.$globals['base_static'].'img/twemojis/36/'.$v.'.png" alt="{0x'.$v.'}" title="{0x'.$v.'}">';
		}
		echo '</div>';
	}
}

echo '</div>';
