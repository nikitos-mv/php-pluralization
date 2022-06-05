<?php

namespace Oblik\Pluralization;

const ZERO = 0;
const ONE = 1;
const TWO = 2;
const FEW = 3;
const MANY = 4;
const OTHER = 5;

const LANGUAGES = [
  'af'  => AfrikaansLanguage::class,
  'sq'  => AlbanianLanguage::class,
  'am'  => AmharicLanguage::class,
  'ar'  => ArabicLanguage::class,
  'hy'  => ArmenianLanguage::class,
  'az'  => AzerbaijaniLanguage::class,
  'bm'  => BambaraLanguage::class,
  'eu'  => BasqueLanguage::class,
  'be'  => BelarusianLanguage::class,
  'bn'  => BengaliLanguage::class,
  'bs'  => BosnianLanguage::class,
  'bg'  => BulgarianLanguage::class,
  'my'  => BurmeseLanguage::class,
  'ca'  => CatalanLanguage::class,
  'yue' => CantoneseLanguage::class,
  'chr' => CherokeeLanguage::class,
  'zh'  => ChineseLanguage::class,
  'hr'  => CroatianLanguage::class,
  'cs'  => CzechLanguage::class,
  'da'  => DanishLanguage::class,
  'nl'  => DutchLanguage::class,
  'dz'  => DzongkhaLanguage::class,
  'en'  => EnglishLanguage::class,
  'eo'  => EsperantoLanguage::class,
  'es'  => EstonianLanguage::class,
  'pt_PT'   => EuropeanPortugueseLanguage::class,
  'fo'  => FaroeseLanguage::class,
  'fil' => FilipinoLanguage::class,
  'fi'  => FinnishLanguage::class,
  'fr'  => FrenchLanguage::class,
  'ff'  => FulahLanguage::class,
  'gl'  => GalicianLanguage::class,
  'ka'  => GeorgianLanguage::class,
  'de'  => GermanLanguage::class,
  'el'  => GreekLanguage::class,
  'gu'  => GujaratiLanguage::class,
  'ha'  => HausaLanguage::class,
  'he'  => HebrewLanguage::class,
  'hi'  => HindiLanguage::class,
  'hu'  => Hungarian::class,
  'is'  => IcelandicLanguage::class,
  'ig'  => IgboLanguage::class,
  'id'  => IndonesianLanguage::class,
  'in'  => IndonesianLanguage::class,
  'ga'  => IrishLanguage::class,
  'it'  => ItalianLanguage::class,
  'ja'  => JapaneseLanguage::class,
  'jv'  => JavaneseLanguage::class,
  'jw'  => JavaneseLanguage::class,
  'kea' => KabuverdianuLanguage::class,
  'kn'  => KannadaLanguage::class,
  'kk'  => KazakhLanguage::class,
  'km'  => KhmerLanguage::class,
  'ko'  => KoreanLanguage::class,
  'ses' => KoyraboroSenniLanguage::class,
  'ku'  => KurdishLanguage::class,
  'ky'  => KyrgyzLanguage::class,
  'lkt' => LakotaLanguage::class,
  'lo'  => LaoLanguage::class,
  'lv'  => LatvianLanguage::class,
  'lt'  => LithuanianLanguage::class,
  'jbo' => LojbanLanguage::class,
  'mk'  => MacedonianLanguage::class,
  'kde' => MakondeLanguage::class,
  'mg'  => MalagasyLanguage::class,
  'ms'  => MalayLanguage::class,
  'ml'  => MalayalamLanguage::class,
  'mt'  => MalteseLanguage::class,
  'mr'  => MarathiLanguage::class,
  'mn'  => MongolianLanguage::class,
  'ne'  => NepaliLanguage::class,
  'no'  => NorwegianLanguage::class,
  'nb'  => NorwegianBokmalLanguage::class,
  'nn'  => NorwegianNynorskLanguage::class,
  'nqo' => NKoLanguage::class,
  'or'  => OriyaLanguage::class,
  'ps'  => PashtoLanguage::class,
  'fa'  => PersianLanguage::class,
  'pl'  => PolishLanguage::class,
  'pt'  => PortugueseLanguage::class,
  'pa'  => PunjabiLanguage::class,
  'ro'  => RomanianLanguage::class,
  'rm'  => RomanshLanguage::class,
  'ru'  => RussianLanguage::class,
  'sah' => SakhaLanguage::class,
  'sg'  => SangoLanguage::class,
  'sr'  => SerbianLanguage::class,
  'si'  => SinhalaLanguage::class,
  'sk'  => SlovakLanguage::class,
  'sl'  => SlovenianLanguage::class,
  'so'  => SomaliLanguage::class,
  'sv'  => SwedishLanguage::class,
  'ii'  => SichuanYiLanguage::class,
  'es'  => SpanishLanguage::class,
  'sw'  => SwahiliLanguage::class,
  'syr' => SyriacLanguage::class,
  'ta'  => TamilLanguage::class,
  'te'  => TeluguLanguage::class,
  'th'  => ThaiLanguage::class,
  'bo'  => TibetanLanguage::class,
  'to'  => TonganLanguage::class,
  'tr'  => TurkishLanguage::class,
  'uk'  => UkrainianLanguage::class,
  'uz'  => UzbekLanguage::class,
  'vi'  => VietnameseLanguage::class,
  'cy'  => WelshLanguage::class,
  'wo'  => WolofLanguage::class,
  'yo'  => YorubaLanguage::class,
];
