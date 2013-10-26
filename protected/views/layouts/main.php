<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
    <div class="top_menu">
        <div id="bokmarks">Закладки</div>
        <div id="mainmenu">
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Галерея', 'url'=>array('/galery')),
                    array('label'=>'Настройки', 'url'=>array('/user/settings')),
                    array('label'=>'Помощь', 'url'=>array('/help')),
                    array('label'=>'Войти', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),                                
                    array('label'=>'Выйти', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
            )); ?>
        </div><!-- mainmenu -->
    </div><!-- top_menu -->
    <div id="workspace">
        <div id="nav">
            <div id="nav_header">
                <input type="image" src="/css/collapse.png" alt="<<" onclick="navHide()" id="navCollapse"/>
            </div>
            <div class="tool"><a href="<?php echo $this->createUrl('/user/profile')?>"><img src="/css/profile_ico.png"/>Профиль</a></div>
            <div class="toolbar" id="profile">
            </div>
            <div class="tool"><a href="<?php echo $this->createUrl('/contacts')?>"><img src="/css/contactts_ico.png"/>Контакты</a></div>
            <div class="toolbar" id="contacts">
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Наставник', 'url'=>array('/contacts/mentor')),
                    array('label'=>'Руководители', 'url'=>array('/contacts/managers')),
                    array('label'=>'Сотрудники', 'url'=>array('/contacts/employees')),
                    array('label'=>'Коллеги', 'url'=>array('/contacts/associates')),                                
                    array('label'=>'Партнеры', 'url'=>array('/contacts/partners')),
                    array('label'=>'Конкуренты', 'url'=>array('/contacts/competitors')),                                
                    array('label'=>'Клиенты', 'url'=>array('/contacts/clients'))
                ),
            )); ?>
            </div>
            <div class="tool"><a href="<?php echo $this->createUrl('/chat')?>"><img src="/css/chat_ico.png"/>Общение:</a></div>
            <div class="toolbar" id="chat">
            <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
                    array('label'=>'Входящие', 'url'=>array('/chat/inbox'), 'items'=>array(
                        array('label'=>'Новые', 'url'=>array('/chat/inbox', 'type'=>'unread')),
                        array('label'=>'Высокий приоритет', 'url'=>array('/chat/inbox', 'type'=>'hightpriorety')),
                        array('label'=>'Все', 'url'=>array('/chat/inbox', 'type'=>'all')),
                    )),
                    array('label'=>'Отправленые', 'url'=>array('/chat/outbox')),
                    array('label'=>'Написать', 'url'=>array('/chat/send')),
                ),
            )); ?>
            </div>
            <div class="tool"><a href="<?php echo $this->createUrl('/team')?>"><img src="/css/tem_ico.png"/>Команды</a></div>
            <div class="toolbar" id="team"></div>
            <div class="tool"><a href="<?php echo $this->createUrl('/projects')?>"><img src="/css/projects_ico.png"/>Проекты</a></div>
            <div class="toolbar" id="projects"></div>
            <div class="tool"><a href="<?php echo $this->createUrl('/tasks')?>"><img src="/css/tasks_ico.png"/>Задачи</a></div>
            <div class="toolbar" id="task"></div>
            <div class="tool"><a href="<?php echo $this->createUrl('/reports')?>"><img src="/css/reports_ico.png"/>Отчеты</a></div>
            <div class="toolbar" id="reports"></div>
            <div class="tool"><a href="<?php echo $this->createUrl('/library')?>"><img src="/css/library_ico.png"/>Справочники</a></div>
            <div class="toolbar" id="library"></div>

        </div>
        <div id="mainView"><?php echo $content; ?></div>
    </div> <!-- worspace -->
    <!--<div class="clear"/>-->
    <div class="bot_menu">
        <div class="bot_menu_layout">
            <b>
        <?php echo CHtml::link('Помощь', $this->createUrl('/site/help'), array('id'=>'menu_item'));?>
        <?php echo CHtml::link('Новости', $this->createUrl('/news'), array('id'=>'menu_item'));?>
            </b>
        </div>
    </div> <!-- bot_menu -->

</div><!-- page -->

</body>
</html>
