<h1>Выполение тестового задания Laravel (backend)</h1>

<h4>Дано:</h4>
<i>Сущность «Персона»</i><br>
<ol>
    <li>id — беззнаковое большое целое число</li>
    <li>last_name — строка «Фамилия»</li>
    <li>first_name — строка «Имя»</li>
    <li>middle_name — строка «Отчество»</li>
    <li>birth_date — строка «Дата рождения»</li>
    <li>active — bool «Активный»</li>
    <li>group_id — беззнаковое большое целое число, ссылка на группу</li>
</ol>
<br>
<i>Сущность «Академическая группа»</i><br>
<ol>
    <li>id — беззнаковое большое целое число</li>
    <li>title — строка «Название группы»</li>
    <li>course — число «Курс»</li>
    <li>faculty — строка «Факультет»</li>
    <li>archive — bool «В архиве»</li>
</ol>

<h4>Задание:</h4>
<ol>
    <li>Сделать модели для сущностей «Персона» и «Академическая группа», обеспечив 
        связь моделей.</li>
    <li>Сделать миграции для этих моделей. При создании миграции необходимо учесть, что 
        персону часто ищут по ФИО, а группу по названию.</li>
    <li>Сделать атрибут в модели «Персона», возвращающий количество полных лет 
            персоны.</li>
    <li>Сделать метод (не важно в каком файле, главное сам метод), возвращающий всех 
        активных персон выбранной неархивной группы:
        <ul>
            <li>Вход: id группы.</li>
            <li>Выход: коллекция моделей «Персона».</li>
        </ul>
    </li>
    <li>Сделать factory-класс для генерирования записей «Персона».</li>
    <li>Сделать тест, проверяющий корректность работы атрибута, возвращающего 
        количество полных лет персоны из п.3.</li>
</ol>