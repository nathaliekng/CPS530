#!/usr/bin/ruby -w
puts "Content-type: text/html\n\n"

require "cgi"
cgi = CGI.new

puts "<html><head>"
puts "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>"
puts "<script>"
puts "$(document).ready(function(){
    $(\"button\").click(function(){
      $(\"#area\").fadeToggle();
      $(\"#middle\").fadeToggle(\"slow\");
      $(\"#last\").fadeToggle(3000);
    });
  });"
puts "</script>"
puts "<title>Lab 6</title></head>"
puts "<body style = \"text-align:center\">"



phone = cgi['phone'].split('-')
area = '('+ phone[0] + ') '
middle = phone[1] + '-'
last = phone[2]


puts "<p>Your name is: " +cgi['first'].split.map(&:capitalize)*' ' +"</p><br><br>"
puts "<p>Your address is: " + cgi['address'].split.map(&:capitalize)*' ' +"<p><br><br>"
puts "<p>Your phone number is: <p><br><br>"
puts "<button>Click to fade in/out phone number</button><br><br>"
puts "<p style=\"color: red; font-size: 40px; white-space: nowrap;\" id=\"area\">"+area+"</p>"
puts "<p style=\"color: blue; font-size: 40px; white-space: nowrap;\" id=\"middle\"> "+middle+"</p>"
puts "<p style=\"color: purple; font-size: 40px; white-space: nowrap;\" id=\"last\"> "+last+"</p>"



puts "</body>"
puts "</html>"