<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $projects = array(
      array(
        'id' => 1,
        'title' => 'Auto tajikistan',
        'logo' => 'auto-tajikistan.png',
      ),
      array(
        'id' => 2,
        'title' => 'City Service',
        'logo' => 'city-service.png',
      ),
      array(
        'id' => 3,
        'title' => 'Дусти Фарма',
        'logo' => 'dusti-farma.png',
      ),
      array(
        'id' => 4,
        'title' => 'Хонаи ман',
        'logo' => 'honai-man.png',
      ),
      array(
        'id' => 5,
        'title' => 'Taj-Motors',
        'logo' => 'taj-motors.png',
      ),
    );

    foreach ($projects as $project) {
      $table = new Project;
      $table->logo = $project['logo'];
      $table->title = $project['title'];
      $table->description_title = 'Информация о заказчике';
      $table->description = 'Компания Hyundai Авто Таджикистан — официальный дистрибьютор легковых автомобилей Hyundai Motor Company в Республике Таджикистан. Компания также имеет собственный автосервис. Головной офис компании находится в Душанбе.';
      $table->content = '<h3><b>ЦЕЛИ И ЗАДАЧИ ПРОЕКТА</b><br></h3><ul><li>Обеспечить компанию системой оперативного учета основной деятельности;<br></li><li>Сократить сроки и трудоемкость процессов подготовки финансовой отчетности за счет автоматизации данной функции;<br></li><li>Повысить достоверность управленческой отчетности за счет средств интеграции систем (расшифровка показателей до первичного документа);<br></li><li>Обеспечить необходимую глубину аналитического учета в управленческой отчетности;<br></li><li>Снизить объем ошибок, связанных с дублированием и некорректным отражением информации, в результате многочисленных обменов данными и ручным вводом данных;<br></li><li>Получение оперативной и точной информации по остаткам на складах, контроль серий и сроков годности препаратов на всех складских объектах компании;<br></li><li>Ведение учета и ввод хозяйственных операций в единой базе данных.<br></li></ul><h3><b>РЕЗУЛЬТАТЫ ПРОЕКТА</b><br></h3><ul><li>Внедрение и поддержка программного продукта 1С – Рарус: Альфа-Авто: Автосалон + Автосервис + Автозапчасти ПРОФ, редакция 5;<br></li><li>Автоматизация учета движения и хранения ТМЦ;<br></li><li>Автоматизация услуг по обслуживанию и ремонту автомобилей.<br></li></ul><h3><b>ОТЗЫВ ОТ ЗАКАЗЧИКА</b></h3><p>Компания ООО «Авто Таджикистан» официальный представитель Hyundai Motor Company в Республике Таджикистан, выражает благодарность ООО "Ориен Фарм" за внедрение и доработку автоматизированной системы учета в Автосалоне нашей компании. За время нашего сотрудничества ООО "Ориен Фарм" подтвердил свой профессиональный статус, компетентность и активность в решении поставленных задач. Услуги компании ООО "Ориен Фарм" помогли нашей компании перейти на более современную систему финансового и управленческого учета. В частности, упростил учет товарооборота компании, в оказании качественных услуг сервиса, в учете денежных средств и многое другое. В настоящее время наше сотрудничество продолжается, и мы рекомендуем ООО «Ориён Фарм» как надёжного партнера.<br></p>';
      $table->save();
    }
  }
}
