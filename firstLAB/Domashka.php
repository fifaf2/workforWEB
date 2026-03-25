<?php
require_once 'connect-db.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <table>
        <tr>
            <th>IDUser</th>
            <th>Фамилия (Surname)</th>
            <th>Имя (Name)</th>
            <th>Отчество (Patronomic)</th>
            <th>Статус</th>
            <th>Роль</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Users";
        $result = mysqli_query($CONN, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['IDUser'] . "</td>";
                echo "<td>" . htmlspecialchars($row['Surname']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Patronomic']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Status']) . "</td>";
                echo "<td>" . htmlspecialchars($row['Role']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Данных нет</td></tr>";
        }
        ?>
    </table>
</body>
</html>