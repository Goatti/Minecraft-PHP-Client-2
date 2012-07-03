<?php

//29
// 1.2.4, 1.2.5

$pstruct = array(
	"00" => array(
		"int",
	),
	
	"01" => array(
		"int",
		"string",
		"string",
		"int",
		"int",
		"byte",
		"ubyte",
		"ubyte",
	),
	
	"02" => array(
		"string",	
	),
	
	"03" => array(
		"string",
	),
	
	"04" => array(
		"long",
	),	
	
	"05" => array(
		"int",
		"short",
		"short",
		"short",
	),
	
	"06" => array(
		"int",
		"int",
		"int",
	),
	
	"07" => array(
		"int",
		"int",
		"bool",
	),
	
	"08" => array(
		"short",
		"short",
		"float",
	),
	
	"09" => array(
		"int",
		"byte",
		"byte",
		"short",
		"string",
	),
	
	"0a" => array(
		"bool",
	),
	
	"0b" => array(
		"double",
		"double",
		"double",
		"double",
		"bool",
	),

	"0c" => array(
		"float",
		"float",
		"bool",
	),
	
	"0d" => array(
		"double",
		"double",
		"double",
		"double",
		"float",
		"float",
		"bool",
	),
	
	"0e" => array(
		"byte",
		"int",
		"byte",
		"int",
		"byte",	
	),

	"0f" => array(
		"int",
		"ubyte",
		"int",
		"byte",
		"slotData",	
	),
	
	"10" => array(
		"short",
	),
	
	"11" => array(
		"int",
		"byte",
		"int",
		"byte",
		"int",
	),
	
	"12" => array(
		"int",
		"byte",
	),
	
	"13" => array(
		"int",
		"byte",	
	),
	
	"14" => array(
		"int",
		"string",
		"int",
		"int",
		"int",
		"byte",
		"byte",
		"short",
	),
	
	"15" => array(
		"int",
		"short",
		"byte",
		"short",
		"int",
		"int",
		"int",
		"byte",
		"byte",
		"byte",
	),
	
	"16" => array(
		"int",
		"int",
	),
	
	"17" => array(
		"int",
		"byte",
		"int",
		"int",
		"int",
		"int", //if >0, fireball
		"short",
		"short",
		"short",
	),
	
	"18" => array(
		"int",
		"byte",
		"int",
		"int",
		"int",
		"byte",
		"byte",
		"byte",
		"entityMetadata",
	),
	
	"19" => array(
		"int",
		"string",
		"int",
		"int",
		"int",
		"int",
	),
	
	"1a" => array(
		"int",
		"int",
		"int",
		"int",
		"short",
	),
	
	"1c" => array(
		"int",
		"short",
		"short",
		"short",
	),
	
	"1d" => array(
		"int",
	),
	
	"1e" => array(
		"int",
	),
	
	"1f" => array(
		"int",
		"byte",
		"byte",
		"byte",
	),
	
	"20" => array(
		"int",
		"byte",
		"byte",
	),
	
	"21" => array(
		"int",
		"byte",
		"byte",
		"byte",
		"byte",
		"byte",
	),
	
	"22" => array(
		"int",
		"int",
		"int",
		"int",
		"byte",
		"byte",
	),
	
	"23" => array(
		"int",
		"byte",
	),
	
	"26" => array(
		"int",
		"byte",
	),
	
	"27" => array(
		"int",
		"int",
	),
	
	"28" => array(
		"int",
		"entityMetadata",
	),
	
	"29" => array(
		"int",
		"byte",
		"byte",
		"short",
	),
	
	"2a" => array(
		"int",
		"byte",
	),
	
	"2b" => array(
		"float",
		"short",
		"short",
	),
	
	"32" => array(
		"int",
		"int",
		"bool",
	),
	
	"33" => array(
		"int",
		"int",
		"bool",
		"short",
		"short",
		"int",
		"int",
		"newChunkArray",
	),
	
	"34" => array(
		"int",
		"int",
		"short",
		"int",
		"newMultiblockArray",
	),
	
	"35" => array(
		"int",
		"byte",
		"int",
		"byte",
		"byte",
	),
	
	"36" => array(
		"int",
		"short",
		"int",
		"byte",
		"byte",
	),
	
	"3c" => array(
		"double",
		"double",
		"double",
		"float",
		"int",
		"explosionRecord"
	),
	
	"3d" => array(
		"int",
		"int",
		"byte",
		"int",
		"int",
	),
	
	"46" => array(
		"byte",
		"byte",
	),
	
	"47" => array(
		"int",
		"bool",
		"int",
		"int",
		"int",
	),
	
	"64" => array(
		"byte",
		"byte",
		"string",
		"byte",
	),
	
	"65" => array(
		"byte",
	),

	"66" => array(
		"byte",
		"short",
		"byte",
		"short",
		"bool",
		"slotData",
	),
	
	"67" => array(
		"byte",
		"short",
		"slotData",
	),
	
	"68" => array(
		"byte",
		"short",
		"slotArray",
	),
	
	"69" => array(
		"byte",
		"short",
		"short",
	),
	
	"6a" => array(
		"byte",
		"short",
		"bool",
	),
	
	"6b" => array(
		"short",
		"slotData",
	),
	
	"6c" => array(
		"byte",
		"byte",
	),
	
	"82" => array(
		"int",
		"short",
		"int",
		"string",
		"string",
		"string",
		"string",
	),
	
	"83" => array(
		"short",
		"short",
		"ubyte",
		"byteArray",
	),
	
	"84" => array(
		"int",
		"short",
		"int",
		"byte",
		"int",
		"int",
		"int",
	),
	
	"c8" => array(
		"int",
		"byte",
	),
	
	"c9" => array(
		"string",
		"byte",
		"short",
	),
	
	"ca" => array(
		"bool",
		"bool",
		"bool",
		"bool",
	),
	
	"cb" => array(
		"string",
	),
	
	"fa" => array(
		"string",
		"short",
		"byteArray",
	),
	
	"fe" => array(
	),
	
	"ff" => array(
		"string",	
	),
);


?>