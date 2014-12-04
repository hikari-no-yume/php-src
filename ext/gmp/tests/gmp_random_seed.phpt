--TEST--
gmp_random_seed() basic tests
--SKIPIF--
<?php if (!extension_loaded("gmp")) print "skip"; ?>
--FILE--
<?php

// zero int
var_dump(gmp_random_seed(0));

var_dump(gmp_strval(gmp_random()));
var_dump(gmp_strval(gmp_random(1)));
var_dump(gmp_strval(gmp_random(10)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// zero gmp
var_dump(gmp_random_seed(gmp_init(0)));

var_dump(gmp_strval(gmp_random()));
var_dump(gmp_strval(gmp_random(1)));
var_dump(gmp_strval(gmp_random(10)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// negative int
var_dump(gmp_random_seed(-100));

var_dump(gmp_strval(gmp_random()));
var_dump(gmp_strval(gmp_random(1)));
var_dump(gmp_strval(gmp_random(10)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// negative gmp
var_dump(gmp_random_seed(gmp_init(-100)));

var_dump(gmp_strval(gmp_random()));
var_dump(gmp_strval(gmp_random(1)));
var_dump(gmp_strval(gmp_random(10)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// positive int
var_dump(gmp_random_seed(100));

var_dump(gmp_strval(gmp_random()));
var_dump(gmp_strval(gmp_random(1)));
var_dump(gmp_strval(gmp_random(10)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// positive gmp
var_dump(gmp_random_seed(100));

var_dump(gmp_strval(gmp_random()));
var_dump(gmp_strval(gmp_random(1)));
var_dump(gmp_strval(gmp_random(10)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


$seed = gmp_init(1);
$seed <<= 512;

// large negative gmp
var_dump(gmp_random_seed($seed * -1));

var_dump(gmp_strval(gmp_random()));
var_dump(gmp_strval(gmp_random(1)));
var_dump(gmp_strval(gmp_random(10)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// large positive gmp
var_dump(gmp_random_seed($seed));

var_dump(gmp_strval(gmp_random()));
var_dump(gmp_strval(gmp_random(1)));
var_dump(gmp_strval(gmp_random(10)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// standard non conversion error
var_dump(gmp_random_seed('not a number'));


echo "Done\n";
?>
--EXPECTF--
NULL
string(386) "16100871751340485642888774479422205950971474538471317276388238970713821926852258806210387669237144400278914671533438653274777493140545293541785377162348524402063489947660558889561219968642920852870483050552936324125257259316643328803697665037881088889859735075814746314563786538493931260996669892959501637800179548654075887300734264333417283208357503038004080669367070111848040502362219"
string(18) "255344473360201232"
string(192) "566276705882089203328999735915155615747289398229935944715725865523491463654289449864817867794422824157675456435165973986660058784111212531276312901205233176071526587181942240113004108328736022"
string(3) "766"
string(31) "1251852006013618829761115383588"
string(301) "2904442664575028522451529381233481137998826790384445089758175726247096826023839957531211794198483328480161675791738894500687706952157332727908305084432443942315866545175274665372161864357698401817740956147940095302549920711069038378541222669595494627580205085300332122174778540693048337420608925104417"
string(4) "5969"
string(5) "-4126"
string(4) "-926"
NULL
string(386) "16100871751340485642888774479422205950971474538471317276388238970713821926852258806210387669237144400278914671533438653274777493140545293541785377162348524402063489947660558889561219968642920852870483050552936324125257259316643328803697665037881088889859735075814746314563786538493931260996669892959501637800179548654075887300734264333417283208357503038004080669367070111848040502362219"
string(18) "255344473360201232"
string(192) "566276705882089203328999735915155615747289398229935944715725865523491463654289449864817867794422824157675456435165973986660058784111212531276312901205233176071526587181942240113004108328736022"
string(3) "766"
string(31) "1251852006013618829761115383588"
string(301) "2904442664575028522451529381233481137998826790384445089758175726247096826023839957531211794198483328480161675791738894500687706952157332727908305084432443942315866545175274665372161864357698401817740956147940095302549920711069038378541222669595494627580205085300332122174778540693048337420608925104417"
string(4) "5969"
string(5) "-4126"
string(4) "-926"
NULL
string(386) "13477111096113160882601567427091178332669645276785709413953468738199940626922635042144840457533224221336117027441609364710893482124071124759231943384805378201041406842697962243732316555316214869988749798708139879922380266366387589101775891621221881149417841139463207495993669582399783202126977651864760442797681787747348653884279195479310922110107643437514016795836672871442926389274400"
string(20) "15370156633245019617"
string(192) "294354325919119835375781661354719128667828860233586416953977190644006896604022494655398295674227944872858213051595447565156112646032890737200590095517623075051828676500990477704073251304424133"
string(3) "683"
string(31) "1105092118036828878542238774672"
string(301) "2700084798786584694260166508009114488318099110808331607090845844712329387915039325877090587052399841255219556028410036280510827424748532204766771994624650610348058361519239518625728955462297681525123214377383395734875500143425080808436274385326255154393544373636015993206705180032889399161843788895374"
string(4) "7268"
string(5) "-3518"
string(5) "-8432"
NULL
string(386) "13477111096113160882601567427091178332669645276785709413953468738199940626922635042144840457533224221336117027441609364710893482124071124759231943384805378201041406842697962243732316555316214869988749798708139879922380266366387589101775891621221881149417841139463207495993669582399783202126977651864760442797681787747348653884279195479310922110107643437514016795836672871442926389274400"
string(20) "15370156633245019617"
string(192) "294354325919119835375781661354719128667828860233586416953977190644006896604022494655398295674227944872858213051595447565156112646032890737200590095517623075051828676500990477704073251304424133"
string(3) "683"
string(31) "1105092118036828878542238774672"
string(301) "2700084798786584694260166508009114488318099110808331607090845844712329387915039325877090587052399841255219556028410036280510827424748532204766771994624650610348058361519239518625728955462297681525123214377383395734875500143425080808436274385326255154393544373636015993206705180032889399161843788895374"
string(4) "7268"
string(5) "-3518"
string(5) "-8432"
NULL
string(386) "13477111096113160882601567427091178332669645276785709413953468738199940626922635042144840457533224221336117027441609364710893482124071124759231943384805378201041406842697962243732316555316214869988749798708139879922380266366387589101775891621221881149417841139463207495993669582399783202126977651864760442797681787747348653884279195479310922110107643437514016795836672871442926389274400"
string(20) "15370156633245019617"
string(192) "294354325919119835375781661354719128667828860233586416953977190644006896604022494655398295674227944872858213051595447565156112646032890737200590095517623075051828676500990477704073251304424133"
string(3) "683"
string(31) "1105092118036828878542238774672"
string(301) "2700084798786584694260166508009114488318099110808331607090845844712329387915039325877090587052399841255219556028410036280510827424748532204766771994624650610348058361519239518625728955462297681525123214377383395734875500143425080808436274385326255154393544373636015993206705180032889399161843788895374"
string(4) "7268"
string(5) "-3518"
string(5) "-8432"
NULL
string(386) "13477111096113160882601567427091178332669645276785709413953468738199940626922635042144840457533224221336117027441609364710893482124071124759231943384805378201041406842697962243732316555316214869988749798708139879922380266366387589101775891621221881149417841139463207495993669582399783202126977651864760442797681787747348653884279195479310922110107643437514016795836672871442926389274400"
string(20) "15370156633245019617"
string(192) "294354325919119835375781661354719128667828860233586416953977190644006896604022494655398295674227944872858213051595447565156112646032890737200590095517623075051828676500990477704073251304424133"
string(3) "683"
string(31) "1105092118036828878542238774672"
string(301) "2700084798786584694260166508009114488318099110808331607090845844712329387915039325877090587052399841255219556028410036280510827424748532204766771994624650610348058361519239518625728955462297681525123214377383395734875500143425080808436274385326255154393544373636015993206705180032889399161843788895374"
string(4) "7268"
string(5) "-3518"
string(5) "-8432"
NULL
string(386) "17517289823903393220742578279919954815229524740463730368402128237511862318453381595675765692750750649609755422480004471234960388086555321894591036872550129477305413674775698107868844953599169316550102271816620108199930104365341610775602960735862041722613145476720452800951958891882288668416542937408952006310656170195090436314902430700708511047189929836145291647101130135292078875631354"
string(19) "1662391866670215057"
string(193) "1951928859951518261564127834731454911658112769477733872890285741065126442731035642243573666695893929882207432512593006044657806021743917753379619843420559355572830613932424235592411658293328273"
string(3) "888"
string(30) "136524289584478309125073026188"
string(301) "4487372666528061674404740793683112894444118579769413902123304803304884162086348577960502430419080687314731489440882833272125181594897832730214825704339272207090970657364333461383490282984012738008555512699878911293400686609929745464733074891420787002129849587668122219953473716759349853748437799165176"
string(4) "8559"
string(4) "9426"
string(5) "-2932"
NULL
string(386) "17517289823903393220742578279919954815229524740463730368402128237511862318453381595675765692750750649609755422480004471234960388086555321894591036872550129477305413674775698107868844953599169316550102271816620108199930104365341610775602960735862041722613145476720452800951958891882288668416542937408952006310656170195090436314902430700708511047189929836145291647101130135292078875631354"
string(19) "1662391866670215057"
string(193) "1951928859951518261564127834731454911658112769477733872890285741065126442731035642243573666695893929882207432512593006044657806021743917753379619843420559355572830613932424235592411658293328273"
string(3) "888"
string(30) "136524289584478309125073026188"
string(301) "4487372666528061674404740793683112894444118579769413902123304803304884162086348577960502430419080687314731489440882833272125181594897832730214825704339272207090970657364333461383490282984012738008555512699878911293400686609929745464733074891420787002129849587668122219953473716759349853748437799165176"
string(4) "8559"
string(4) "9426"
string(5) "-2932"

Warning: gmp_random_seed(): Unable to convert variable to GMP - string is not an integer in %s on line %d
bool(false)
Done
