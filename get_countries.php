<?php
$data = file_get_contents('countries.json');
$data = json_decode($data, true);

foreach ($data as &$co) {
  unset($co['official_name']);
  unset($co['topLevelDomain']);
  unset($co['alpha2Code']);
  unset($co['alpha3Code']);
  unset($co['cioc']);
  unset($co['numericCode']);
  unset($co['capital']);
  unset($co['altSpellings']);
  unset($co['region']);
  unset($co['subregion']);
  unset($co['population']);
  unset($co['latLng']);
  unset($co['demonyms']);
  unset($co['area']);
  unset($co['gini']);
  unset($co['timezones']);
  unset($co['nativeNames']);
  unset($co['currencies']);
  unset($co['languages']);
  unset($co['translations']);
  unset($co['flag']);
  unset($co['regionalBlocs']);
  unset($co['borders']);
}

file_put_contents('country_codes.json' , json_encode($data));