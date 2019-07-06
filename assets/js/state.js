window.itfstate = {
    'main_page': {
        'calculator': {
            'chooser_site': {
                'title': 'Мы разрабатываем:',
                'current_text': '',
                // 'current_value': '',
                'current_description': '',
                'current_key': '',
                'list': {
                    'elem_1': {
                        'icon': false,
                        'text': 'Одностраничник',
                        'current': false,
                        'permission': 'all',
                        'description': '123'
                    },
                    'elem_2': {
                        'icon': false,
                        'text': 'Лендинг',
                        'current': false,
                        'permission': 'all',
                        'description': '456'
                    },
                    'elem_3': {
                        'icon': false,
                        'text': 'Визитка',
                        'current': false,
                        'permission': 'all',
                        'description': '789'
                    },
                    'elem_4': {
                        'icon': false,
                        'text': 'Блог',
                        'current': true,
                        'permission': 'all',
                        'description': `<p>Простой сайт с постоянно обновляющимся контентом и несколькими рубриками по которым данный контент сортируется.</p>
                                            <p>SEO оптимизация и микроразметка позволят пользователям легко найти ресурс.</p>`
                    },
                    'elem_5': {
                        'icon': false,
                        'text': 'Каталог',
                        'current': false,
                        'permission': 'all',
                        'description': '789'
                    },
                    'elem_6': {
                        'icon': false,
                        'text': 'Интернет магазин',
                        'current': false,
                        'permission': 'all',
                        'description': '789'
                    },
                    'elem_7': {
                        'icon': false,
                        'text': 'Высоконагруженный ресурс',
                        'current': false,
                        'permission': 'all',
                        'description': '789'
                    }
                }
            },
            'chooser_service': {
                'title': 'Наши услуши:',
                'current_text': '',
                // 'current_value': '',
                'current_description': '',
                'current_key': '',
                'list': {
                    'elem_1': {
                        'icon': false,
                        'text': 'ТЗ',
                        'current': false,
                        'permission': 'all',
                        'description': '123'
                    },
                    'elem_2': {
                        'icon': false,
                        'text': 'Дизайн',
                        'current': false,
                        'permission': 'all',
                        'description': '456'
                    },
                    'elem_3': {
                        'icon': false,
                        'text': 'Дизайн и верстка',
                        'current': false,
                        'permission': 'all',
                        'description': '789'
                    },
                    'elem_4': {
                        'icon': false,
                        'text': 'CMS',
                        'current': true,
                        'permission': 'all',
                        'description': `<p>Управление сайтом будет производиться через готовую open source CMS, например WordPress.</p>
                                        <p>Программирование под CMS это быстро и не дорого, но CMS не рассчитана на большие нагрузки (более 10к пользователей в день)</p>`
                    },
                    'elem_5': {
                        'icon': false,
                        'text': 'Под ключ',
                        'current': false,
                        'permission': 'all',
                        'description': '789'
                    },
                    'elem_6': {
                        'icon': false,
                        'text': 'С нуля',
                        'current': false,
                        'permission': 'all',
                        'description': '789'
                    },
                    'elem_7': {
                        'icon': false,
                        'text': 'Микросервисы',
                        'current': false,
                        'permission': 'all',
                        'description': '789'
                    }
                }
            }
        }
    }
};

window.stateUpdated = new Event('state_updated');
