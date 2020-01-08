<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <%
    dim visits=0
    if visits=0 then
        response.write("This is your first time visiting this webpage!")
        response.write(FormatDateTime(date(),vblongdate))
        response.write(FormatDateTime(now(),vblongtime))
        Response.Cookies("Time") = time()
        Response.Cookies("Date") = date()
        visits=1
    else
        response.write("The last time you visited this webpage was: " & date & time)
        Response.Cookies("Time") = time()
        Response.Cookies("Date") = date()
    end if

        getColor = request.querystring("Color")
        response.write("<body style = 'color: "&getColor&"'>")
    %>

</body>
</html>