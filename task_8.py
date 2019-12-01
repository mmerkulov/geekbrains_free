class MyData:
    def __init__(self, data_value=None):
        self.data_value = data_value
        self.__data_dict = None

    @classmethod
    def extraxt_date(cls, data_value):
        work_dict = {'День': 0, 'Месяц': 0, 'Год': 0}
        work_list = data_value.split('-')
        for idx, x in enumerate(work_list):
            # проверяем 1ое число, нужно знать в каких месяцах 30, 31 день. Если месяц февраль, то нужно проверить на
            #       весокосный год, если он, то в феврале 29 дней, иначе 28
            # првоеряем 2ое число, если цифры от 1 до 12, то это месяц
            # проверяем 3е число - если цифр больше >2, то это год
            # #################################### #
            # если всегда 1ое число это день, то можно сразу в словарь запихивать
            if idx == 0:
                work_dict['День'] = int(x)
            elif idx == 1:
                work_dict['Месяц'] = int(x)
            elif idx == 2:
                work_dict['Год'] = int(x)
            else:
                print('Some error!')
        cls.__data_dict = work_dict
        return cls.__data_dict

    @staticmethod
    def validation_data(data_value):
        answer = True
        work_list = [int(x) for x in data_value.split('-')]
        print(work_list)
        for idx, x in enumerate(work_list):
            if idx == 0:
                # Запускаем проверку на дату от 1 до 31
                if x in range(1, 31):
                    # Запускаем проверку на високосный год
                    if x == 29 and work_list[1] == 2 and MyData.__visokosniy_year(work_list[2]) != 1:
                        answer = False
                    # Проверка дня равного 30, что он не входит в некорректные месяцы
                    elif x == 30 and work_list[1] not in (2, 4, 9, 6, 11):
                        answer = False
                    # Проверка дня равного 31, что он не входит в некорректные месяцы
                    elif x == 31 and work_list[1] not in (1, 3, 5, 7, 8, 10, 12):
                        answer = False
            elif idx == 1:
                # Месяц принадлежит от 1 до 12
                if x not in range(1, 12):
                    print(f'Что-то не то с месяцем = {x}! Дата не корректная.')
                    answer = False
            elif idx == 2:
                if x < 0:
                    print(f'Год {x} отрицательный! Дата не корректная.')
                    # либо вернуть инфо, что это "до начала эры"
                    answer = False
        answer = f'Проверка даты закончена. Результат дата = {"корректная" if answer else "не корректная"}.'
        return answer

    @staticmethod
    def __visokosniy_year(year_value):
        answer = 1
        if year_value % 4 != 0 or (year_value % 100 == 0 and year_value % 400 != 0):
            answer = 0
        return answer


q = MyData(data_value='22-10-2019')
t = q.extraxt_date(q.data_value)
print(q.validation_data(data_value='28-2-2019'))
