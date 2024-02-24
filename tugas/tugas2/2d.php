<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
</head>
<style>
    body {
        font-family: arial;
    }

    .table {
        border: 1px solid black;
    }

    .bg {
        background-color: black;
        width: 40px;
        height: 40px;
        border: 3px solid black;
    }

    .bg-2 {
        background-color: white;
        width: 40px;
        height: 40px;
    }
</style>

<body>
<table class="table" cellpadding ="10" cellspacing ="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <?php if (($i + $j) % 2 == 0) : ?>
                        <td class="bg">
                            <?php else : ?>
                        <td class="bg-2">
                             <?php endif ; ?>
                             </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>

</table>
</body>
</html>