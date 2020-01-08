<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    display time and date + change in background texture and colour. 
    <%
    if visits=""
        response.write("This is your first time visiting this webpage!")
        response.write(FormatDateTime(date(),vblongdate))
        response.write(FormatDateTime(now(),vblongtime))
        date=FormatDateTime(date(), vblongdate)
        time=FormatDateTime(now(), vblongtime)
        
    else
        response.write("The last time you visited this webpage was: " & date & time)
        date=FormatDateTime(date(), vblongdate)
        time=FormatDateTime(now(), vblongtime)
    %>
</body>
</html>