<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = array(
      array(
        'id' => 1,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'email',
        'text' => 'diis@orienpharm.tj'
      ),
      array(
        'id' => 2,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'phone',
        'text' => '+992 988 99 22 11',
      ),
      array(
        'id' => 3,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'address',
        'text' => 'Таджикистан,
г. Душанбе, ул. Шамси 4Б',
      ),
      array(
        'id' => 4,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-title',
        'text' => 'У вас есть вопросы по 1С?',
      ),
      array(
        'id' => 5,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-text',
        'text' => 'Оставьте свои контактные данные
и мы свяжемся с вами в ближайшее время',
      ),
      array(
        'id' => 6,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-fail-msg',
        'text' => 'Перепроверьте данные',
      ),
      array(
        'id' => 7,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-success-msg',
        'text' => 'Перезвоним в течении 20 минут',
      ),
      array(
        'id' => 8,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'welcome-title',
        'text' => 'Автоматизируем
ваши бизнес-процессы',
      ),
      array(
        'id' => 9,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'welcome-subtitle',
        'text' => 'Наша компания является официальным партнером
фирмы «1С» и имеет статус «1С:Франчайзи».',
      ),
      array(
        'id' => 10,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'welcome-link',
        'text' => 'Наши услуги',
      ),
      array(
        'id' => 11,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'whywe-title',
        'text' => 'Почему именно мы',
      ),
      array(
        'id' => 12,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'whywe-escort-title',
        'text' => 'Сопровождение',
      ),
      array(
        'id' => 13,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'whywe-escort-subtitle',
        'text' => 'На протяжении всей жизни программы',
      ),
      array(
        'id' => 14,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'whywe-effect-title',
        'text' => 'Эффективная работа',
      ),
      array(
        'id' => 15,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'whywe-effect-subtitle',
        'text' => 'Быстро, качественно и продуктивно',
      ),
      array(
        'id' => 16,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'whywe-client-title',
        'text' => 'Клиентоориентированность',
      ),
      array(
        'id' => 17,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'whywe-client-subtitle',
        'text' => 'Ваш успех - наша цель',
      ),
      array(
        'id' => 18,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'advantages-title',
        'text' => 'Наши преимущества',
      ),
      array(
        'id' => 19,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'products-section-title',
        'text' => 'Продукты 1С',
      ),
      array(
        'id' => 20,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'products-section-subtitle',
        'text' => 'Сертифицированные специалисты имеют достаточный опыт по
внедрению программных продуктов 1С в самых различных отраслях.',
      ),
      array(
        'id' => 21,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'products-link-title',
        'text' => 'Подробнее о продукте',
      ),
      array(
        'id' => 22,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'projects-section-title',
        'text' => 'Наши проекты',
      ),
      array(
        'id' => 23,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'projects-section-subtitle',
        'text' => 'В копилке нашей команды более <span>20 успешно</span> внедренных решений
для самых разных отраслевых компаний.',
      ),
      array(
        'id' => 24,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'all-projects-link',
        'text' => 'Все наши проекты',
      ),
      array(
        'id' => 25,
        'type' => 'home',
        'page_id' => null,
        'caption' => 'companies-title',
        'text' => 'Нам доверяют',
      ),
      array(
        'id' => 26,
        'type' => 'footer',
        'page_id' => null,
        'caption' => 'products-heading',
        'text' => 'Наши продукты',
      ),
      array(
        'id' => 27,
        'type' => 'footer',
        'page_id' => null,
        'caption' => 'projects-heading',
        'text' => 'Наши проекты',
      ),
      array(
        'id' => 28,
        'type' => 'footer',
        'page_id' => null,
        'caption' => 'site-cards-heading',
        'text' => 'Карта сайта',
      ),
      array(
        'id' => 29,
        'type' => 'footer',
        'page_id' => null,
        'caption' => 'contacts-heading',
        'text' => 'Как с нами связаться',
      ),
      array(
        'id' => 30,
        'type' => 'footer',
        'page_id' => null,
        'caption' => 'copyright',
        'text' => '© 2021 ООО «Ориён Фарм»',
      ),
      array(
        'id' => 31,
        'type' => null,
        'page_id' => 1,
        'caption' => 'how-began-title',
        'text' => 'Как все начиналось',
      ),
      array(
        'id' => 32,
        'type' => null,
        'page_id' => 1,
        'caption' => 'how-began-text',
        'text' => 'В октябре 2017 года компания ООО «Ориен Фарм» в целях автоматизации бизнес процессов отобрала команду из 8-х человек в качестве стажеров на должность 1С консультантов и разработчиков. Компания предоставила равную возможность всем, пройти обучение по внедрению, разработке и доработке программных продуктов на платформе 1С, всячески способствовала всестороннему личностному развитию стажеров в ходе обучения.

В процессе обучения сотрудники выполняли специализированные задачи на платформе 1С, благодаря которым профессиональные знания развивались и закреплялись.

После 3-х месяцев онлайн обучения, из 4-х прошедших отбор и аттестацию стажеров, был создан отдел «Разработка и Внедрение Информационных Систем» («РВИС»), после чего, уже действующие сотрудники, получили доступ к тестовой базе данных Компании. Команда отдела начала изучать копию программы 1С:ERP, которая была установлена на основном сервере. Отдел начал решать реальные проблемы компании и параллельно продолжал углубляться в обучение и саморазвитие.  Активно взаимодействовали с сотрудниками компании для решения задач и текущих проблем. Именно взаимодействие и постоянная поддержка коллег мотивировало команду отдела «РВИС» на достижение новых высот.

После более двух лет обучения и практики, получения сертификатов, в 2019 года отдел «РВИС» достиг  достаточного профессионализма и инициировал, по указанию Руководства, автоматизацию бизнес процессов партнеров Компании.

В течении двух последующих лет отдел внедряли и сопровождал готовые решения продуктов компании 1С. В ноябре 2020 года ООО «ОРИЕН ФАРМ» заключила договор Франчайзи с Компанией 1С.
В начале 2021 года отдел активно расширяет ряды сертифицированных разработчиков в целях оказать качественные и доступные услуги по автоматизации бизнес процессов на рынке Республики.

С полной хронологией  создания и деятельности отдела «РВИС» Вы можете ознакомиться ниже.',
      ),
      array(
        'id' => 33,
        'type' => null,
        'page_id' => 1,
        'caption' => 'mission-title',
        'text' => 'Миссия',
      ),
      array(
        'id' => 34,
        'type' => null,
        'page_id' => 1,
        'caption' => 'mission-text',
        'text' => 'Внедрять и поддерживать на высоком уровне передовые автоматизированные информационные решения, обеспечивающие и способствующие эффективности и прозрачности бизнес-процессов.',
      ),
      array(
        'id' => 35,
        'type' => null,
        'page_id' => 1,
        'caption' => 'vision-title',
        'text' => 'Видение',
      ),
      array(
        'id' => 36,
        'type' => null,
        'page_id' => 1,
        'caption' => 'vision-text',
        'text' => 'Через вклад в развитие профессиональных навыков и повышения уровня компетентности сотрудников, за счет совершенствования и поддержания должного уровня качества оказываемых услуг, усиливая конкурентные позиции в сфере деятельности, закрепится среди лидеров на рынке Центральной Азии',
      ),
      array(
        'id' => 37,
        'type' => null,
        'page_id' => 1,
        'caption' => 'values-title',
        'text' => 'Наши ценности',
      ),
      array(
        'id' => 38,
        'type' => null,
        'page_id' => 1,
        'caption' => 'values-knowledge',
        'text' => 'Знание тенденций и инноваций',
      ),
      array(
        'id' => 39,
        'type' => null,
        'page_id' => 1,
        'caption' => 'values-client',
        'text' => 'Клиенто-ориентированность',
      ),
      array(
        'id' => 40,
        'type' => null,
        'page_id' => 1,
        'caption' => 'values-transparency',
        'text' => 'Прозрачность и надежность',
      ),
      array(
        'id' => 41,
        'type' => null,
        'page_id' => 1,
        'caption' => 'values-integration',
        'text' => 'Быстрая интеграция и реализация',
      ),
      array(
        'id' => 42,
        'type' => null,
        'page_id' => 1,
        'caption' => 'success-title',
        'text' => 'Наши шаги к успеху',
      ),
      array(
        'id' => 43,
        'type' => null,
        'page_id' => 1,
        'caption' => 'success-subtitle',
        'text' => 'Сопровождение всех ниже указанных организаций продолжается по сей день.',
      ),
      array(
        'id' => 44,
        'type' => null,
        'page_id' => 1,
        'caption' => 'projects-link',
        'text' => 'Наши проекты',
      ),
      array(
        'id' => 45,
        'type' => null,
        'page_id' => 1,
        'caption' => 'team-title',
        'text' => 'Наша команда',
      ),
      array(
        'id' => 46,
        'type' => null,
        'page_id' => 1,
        'caption' => 'team-subtitle',
        'text' => 'Вы воображаете, мы воплощаем.',
      ),
      array(
        'id' => 47,
        'type' => null,
        'page_id' => 1,
        'caption' => 'certificates-title',
        'text' => 'Наши сертификаты',
      ),
      array(
        'id' => 48,
        'type' => null,
        'page_id' => 1,
        'caption' => 'certificates-subtitle',
        'text' => 'Сертифицированные специалисты имеют достаточный опыт по внедрению программных продуктов 1С в самых различных отраслях.',
      ),
      array(
        'id' => 49,
        'type' => null,
        'page_id' => 2,
        'caption' => 'publications-heading',
        'text' => 'Публикации',
      ),
      array(
        'id' => 50,
        'type' => null,
        'page_id' => 2,
        'caption' => 'publications-all',
        'text' => 'Все',
      ),
      array(
        'id' => 51,
        'type' => null,
        'page_id' => 2,
        'caption' => 'publications-news',
        'text' => 'Новости',
      ),
      array(
        'id' => 52,
        'type' => null,
        'page_id' => 2,
        'caption' => 'publications-article',
        'text' => 'Статьи',
      ),
      array(
        'id' => 53,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback',
        'text' => 'Обратный звонок',
      ),
      array(
        'id' => 54,
        'type' => 'header',
        'page_id' => null,
        'caption' => 'feedback-submit-btn',
        'text' => 'Позвонить мне',
      ),
      array(
        'id' => 55,
        'type' => 'footer',
        'page_id' => null,
        'caption' => 'scroll-top',
        'text' => 'Вернуться вверх',
      ),
      array(
        'id' => 56,
        'type' => null,
        'page_id' => 3,
        'caption' => 'our-projects-heading',
        'text' => 'Наши проекты',
      ),
      array(
        'id' => 57,
        'type' => null,
        'page_id' => 3,
        'caption' => 'our-projects-subheading',
        'text' => 'Сопровождение всех ниже указанных организаций продолжается по сей день.',
      ),
    );

    foreach ($texts as $text) {
      $table = new Text();
      $table->type = $text['type'];
      $table->page_id = $text['page_id'];
      $table->caption = $text['caption'];
      $table->text = $text['text'];
      $table->save();
    }
  }
}
