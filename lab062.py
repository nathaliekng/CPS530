#!/usr/bin/python
print("Content-type: text/html\n\n")
import cgi

form=cgi.FieldStorage()
name=form.getvalue('first')
address=form.getvalue('address')
phone=form.getvalue('phone')
phoneFormat=phone.split('-')
area='('+phoneFormat[0]+') '
middle=phoneFormat[1]+'-'
last=phoneFormat[2]


print("<html><head></head><body style=\"text-align:center;\"")



print("<p> Your name is: "+name.title()+"</p><br>")
print("<p>Your address is: "+address.title()+"</p><br>")
print("<p>Your phone number is: <br>")
print("<button>Start Animation</button><br>")
print("<h1 id=\"area\">"+area+"</h1>")
print("<h1 id=\"middle\">"+middle+"</h1>")
print("<h1 id=\"last\">"+last+"</h1><br>")

print("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script><script>")
print("$(document).ready(function(){")
print("$(\"button\").click(function(){")
print("$(\"#area\").animate({")
print("height: 'toggle'}, \"slow\"")
print(");")
print("$(\"#middle\").animate({")
print("opacity: '0.5'}, \"slow\"")
print(");")
print("$(\"#last\").animate({")
print("fontSize: '3em' }, \"slow\"")
print(");")
print("});")
print("});")
print("</script>")

print("</body></html>")
