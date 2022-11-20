<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Nothing here ... Kicked on <span id="countdown">3</span>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const redirect = () => {
        window.location.href = window.location.origin + '/api/documentation';
    }

    let count = 2;
    let interval = setInterval(() => {
        $('#countdown').text(count);
        if (count === 0) {
            clearInterval(interval);
            redirect();
        }
        count--;
    }, 1000);
</script>

</html>