<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Certificate;
use App\Models\Gain;
use App\Models\PubCat;
use App\Models\Publication;
use App\Models\SuccessStep;
use App\Models\Value;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // =>> our values
    $values = array(
      array('content' => 'Знание тенденций и инноваций'),
      array('content' => 'Клиенто - ориентированность'),
      array('content' => 'Прозрачность и надежность'),
      array('content' => 'Быстрая интеграция и реализация'),
    );
    foreach ($values as $value) {
      $table = new Value;
      $table->content = $value['content'];
      $table->save();
    }
    // our values <<=
    // =>> our steps to success
    $successSteps = array(
      array('text' => 'Создание отдела из 8-х человек и начало обучения продолжительностью в год.'),
      array('text' => 'Наши сотрудники успешно прошли сертификацию 1С Профессионал и мы получили 4 типа сертификата.'),
      array('text' => 'Получили статус
Франчайзи 1С.'),
      array('text' => 'К нам присоединились новые перспективные сотрудники и нас стало больше.'),
      array('text' => 'Наш новый сотрудник успешно прошел сертификацию 1С Профессионал и наша копилка пополнилась новым сертификатом 1С Профессионал: Документооборот 2.1.'),
    );
    foreach ($successSteps as $step) {
      $table = new SuccessStep;
      $table->text = $step['text'];
      $table->save();
    }
    // our steps to success <<=
    // =>> certificates
    for ($i = 1; $i < 5; $i++) {
      $certificate = new Certificate;
      $certificate->img = 'certificate' . $i . '.jpg';
      $certificate->save();
    }
    // certificates <<=
    // =>> publications
    foreach (range(1, 32) as $val) {
      $publication = new Publication;
      $publication->content = '<p>Основные изменения связаны с введением с 01.07.2021 механизма прослеживаемости товаров (Федеральный закон от 09.11.2020 № 371-ФЗ, см. подробнее) и с соответствующими поправками в правила заполнения (ведения) счетов-фактур, книг покупок и продаж, журнала учета полученных и выставленных счетов-фактур (постановление Правительства РФ от 02.04.2021 № 534, см. подробнее).<br></p><p><br></p><p>В соответствии с Приказом № 228 в новой редакции изложены следующие разделы:</p><ul><li>раздел 8 «Сведения из книги покупок об операциях, отражаемых за истекший налоговый период» и Приложение 1 к разделу 8 «Сведения из дополнительных листов книги покупок»;<br></li></ul><ul><li>раздел 9 «Сведения из книги продаж об операциях, отражаемых за истекший налоговый период» и Приложение 1 к разделу 9 декларации «Сведения из дополнительных листов книги продаж»;<br></li></ul><ul><li>раздел 10 «Сведения из журнала учета выставленных счетов-фактур в отношении операций, осуществляемых в интересах другого лица на основе договоров комиссии, агентских договоров или на основе договоров транспортной экспедиции, отражаемых за истекший налоговый период»;<br></li></ul><ul><li>раздел 11 «Сведения из журнала учета полученных счетов-фактур в отношении операций, осуществляемых в интересах другого лица на основе договоров комиссии, агентских договоров или на основе договоров транспортной экспедиции, отражаемых за истекший налоговый период».<br></li></ul><p>Так, из раздела 8 (Приложения 1 к разделу 8) и раздела 9 (Приложения 1 к разделу 9) исключаются строки «Регистрационный номер таможенной декларации» (строка 150 – для раздела 8 и строка 035 – для раздела 9).<br></p><p><br></p><p>При этом в разделах с 8 по 11 вводятся новые строки, в которых указываются следующие сведения:</p><ul><li>«Регистрационный номер декларации на товары или регистрационный номер партии товара, подлежащего прослеживаемости» (строка 200 раздела 8, строка 200 Приложения 1 к разделу 8, строка 221 раздела 9, строка 301 Приложения 1 к разделу 9, строка 220 раздела 10, строка 210 раздела 11);<br></li><li>«Код количественной единицы измерения товара, используемой в целях осуществления прослеживаемости» (строка 210 раздела 8, строка 210 Приложения 1 к разделу 8, строка 222 раздела 9, строка 302 Приложения 1 к разделу 9, строка 230 раздела 10, строка 220 раздела 11);<br></li><li>«Количество товара, подлежащего прослеживаемости, в количественной единице измерения товара, используемой в целях осуществления прослеживаемости» (строка 220 раздела 8, строка 220 Приложения 1 к разделу 8, строка 223 раздела 9, строка 303 Приложения 1 к разделу 9, строка 240 раздела 10, строка 230 раздела 11);<br></li><li>«Стоимость товара, подлежащего прослеживаемости, без НДС» (строка 230 раздела 8, строка 230 Приложения 1 к разделу 8, строка 224 раздела 9, строка 304 Приложения 1 к разделу 9, строка 250 раздела 10, строка 240 раздела 11).<br></li></ul><p>В примечании указано, что для новых строк заполняется необходимое количество листов с указанными показателями, что соответствует введению подстрок к графам книги покупок и продаж, журнала учета.<br></p><p><br></p><p>В порядке заполнения налоговой декларации исключено упоминание единого налога на вмененный доход и уточнена увязка показателей отдельных строк декларации с показателями иных строк различных разделов.<br></p><p><br></p><p>В декларации произведена замена штрихкодов.<br></p><p><br></p><p>Внесены уточнения в список кодов операций к порядку заполнения налоговой декларации:<br></p><ul><li>код 1010823 – будет применяться также при реализации товаров (работ, услуг) должников, признанных в соответствии с законодательством РФ несостоятельными (банкротами), в том числе товаров (работ, услуг), изготовленных и (или) приобретенных (выполненных, оказанных) в процессе осуществления хозяйственной деятельности после признания должников в соответствии с законодательством РФ;<br></li><li>код 1010243 – будет применяться также для реализации долей в праве собственности на общее имущество участников договора инвестиционного товарищества;<br></li><li>код 1010236 – исключен, так как был связан с проведением чемпионата мира FIA «Формула-1» в Сочи.<br></li></ul><p>Аналогичные изменения внесены в формат представления налоговой декларации, которому присвоен следующий номер версии – «5.08».<br></p>';
      $publication->author = 'Админ';
      if ($val % 2 == 0) {
        $publication->title = 'Является ли повышение окладов поводом для подачи СЗВ-ТД?';
        $publication->category_id = 1;
      } else {
        $publication->title = 'Безналичный чек в 1С';
        $publication->category_id = 2;
      }
      $publication->save();
    }
    $pubCats = ['Новости', 'Статьи'];
    foreach ($pubCats as $category) {
      $table = new PubCat();
      $table->title = $category;
      $table->save();
    }
    // publications <<=
    // =>> gains
    $gains = [
      array('description' => 'Регулярные обновления программ «1С»'),
      array('description' => 'Доступ к информационной системе 1С:ИТС'),
      array('description' => 'Профессиональную линию консультаций'),
    ];
    foreach ($gains as $gain) {
      $table = new Gain();
      $table->description = $gain['description'];
      $table->save();
    }
    // gains <<=
    $this->call([
      PagesSeeder::class,
      AdvantagesSeeder::class,
      ProductsSeeder::class,
      ProductContentsSeeder::class,
      ProjectsSeeder::class,
      CompaniesSeeder::class,
      MembersSeeder::class,
      TextsSeeder::class,
    ]);
  }
}
