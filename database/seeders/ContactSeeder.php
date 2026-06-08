<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->upsert([
            [
                'name' => 'site_name',
                'title' => 'Имя сайта',
                'value' => 'ЗАО «ПРОГРЕСС»',
            ],
            [
                'name' => 'phone',
                'title' => 'Телефон',
                'value' => '(4712)34-30-90',
            ],
            [
                'name' => 'phone_2',
                'title' => 'Дополнительный телефон',
                'value' => null,
            ],
            [
                'name' => 'tg_lnk',
                'title' => 'Ссылка на Телеграм',
                'value' => null,
            ],
            [
                'name' => 'ws_lnk',
                'title' => 'Ссылка на WhatsApp',
                'value' => null,
            ],
            [
                'name' => 'adress',
                'title' => 'Адрес компании',
                'value' => '306123, Курская область, Солнцевский р-н, с. Чермошное',
            ],
            [
                'name' => 'legal_address',
                'title' => 'Юридический адрес',
                'value' => '306123, Курская область, Солнцевский р-н, с. Чермошное',
            ],
            [
                'name' => 'actual_address',
                'title' => 'Фактический адрес',
                'value' => '306123, Курская область, Солнцевский р-н, с. Чермошное',
            ],
            [
                'name' => 'work_time',
                'title' => 'Время работы',
                'value' => '9:00 - 18:00',
            ],
            [
                'name' => 'email',
                'title' => 'E-mail',
                'value' => 'progress-kursk@yandex.ru',
            ],

            [
                'name' => 'gd_dolgnost',
                'title' => 'Должность генерального директора',
                'value' => 'Генеральный директор ЗАО «ПРОГРЕСС» ',
            ],
            [
                'name' => 'gd_name',
                'title' => 'ФИО генерального директора',
                'value' => 'Глазков Александр Вячеславович',
            ],
            [
                'name' => 'gd_phone',
                'title' => 'Телефон генерального директора',
                'value' => '+7 (919) 212-84-80',
            ],

            [
                'name' => 'id_dolgnost',
                'title' => 'Должность исполнительного директора',
                'value' => 'Исполнительный директор ЗАО «ПРОГРЕСС» ',
            ],
            [
                'name' => 'id_name',
                'title' => 'ФИО исполнительного директора',
                'value' => 'Сотникова Ольга Александровна',
            ],
            [
                'name' => 'id_phone',
                'title' => 'Телефон исполнительного директора',
                'value' => '+7 (951) 331-02-61',
            ],

            [
                'name' => 'company_name',
                'title' => 'Наименование компании',
                'value' => 'Закрытое акционерное общество «ПРОГРЕСС» (ЗАО «ПРОГРЕСС»)',
            ],
            [
                'name' => 'company_short_name',
                'title' => 'Краткое наименование',
                'value' => 'ЗАО «ПРОГРЕСС»',
            ],
            [
                'name' => 'inn',
                'title' => 'ИНН',
                'value' => '4622004142',
            ],
            [
                'name' => 'kpp',
                'title' => 'КПП',
                'value' => '462201001',
            ],
            [
                'name' => 'ogrn',
                'title' => 'ОГРН',
                'value' => '1044610000313',
            ],
            [
                'name' => 'rs',
                'title' => 'Расчетный счет',
                'value' => '40702810933000003800',
            ],
            [
                'name' => 'bank',
                'title' => 'Банк',
                'value' => 'Курское отделение №8596 ПАО «Сбербанк» г. Курск',
            ],
            [
                'name' => 'correspondent_account',
                'title' => 'Корреспондентский счет',
                'value' => '30101810300000000606',
            ],
            [
                'name' => 'bik',
                'title' => 'БИК',
                'value' => '043807606',
            ],
            [
                'name' => 'okpo',
                'title' => 'ОКПО',
                'value' => '70735861',
            ],
            [
                'name' => 'oktmo',
                'title' => 'ОКТМО',
                'value' => '38638432156',
            ],
            [
                'name' => 'okfs',
                'title' => 'ОКФС',
                'value' => '16',
            ],
            [
                'name' => 'okopf',
                'title' => 'ОКОПФ',
                'value' => '12267',
            ],
            [
                'name' => 'okogu',
                'title' => 'ОКОГУ',
                'value' => '4210014',
            ],
            [
                'name' => 'okved',
                'title' => 'ОКВЭД',
                'value' => '01.11.1',
            ],
            [
                'name' => 'person',
                'title' => 'Контактное лицо',
                'value' => null,
            ],
            [
                'name' => 'geo',
                'title' => 'Координаты',
                'value' => '51.38524346112373,36.573797499999955',
            ],
        ], ['name'], ['title', 'value']);
    }
}
