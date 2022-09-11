<?php
/**
 * @var array $labels 
 * @var array $records
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <form action="/record/create" method="post">
            <input type="text" name="" id="">
            <input type="text" name="" id="">
    
            <button type="submit">
                Создать

            </button>
        </form>
    </div>

    <table>
        <tr>
            <?php foreach($labels as $label): ?>
                <th>
                    <?=$label ?>
                </th>
            <?php endforeach; ?>
            <th>
                Кнопка удалить
            </th>
            <th>
                Кнопка обновить
            </th>
        </tr>

        <?php foreach($records as $record): ?>
            <tr>
                <?php foreach($record as $item): ?>
                    <td>
                        <?=$item ?>
                    </td>

                <?php endforeach; ?>
                <td>
                    <a href="/record/delete?title=<?= $record['title'];?>">
                        Удалить
                    </a>
                </td>
                <td>
                    <a href="/record/update?title=<?= $record['title'] ?>">
                        Обновить
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>