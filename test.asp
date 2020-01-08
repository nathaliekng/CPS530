<% response.write("Hello world<br />") %>
<% getType = request.querystring("Type")%>
<%response.write getType%>
<%=getType%>
<%if getType ="Hello" then %>
<br />Hello, we are here
<%else%>
<br/>You are at the wrong page
<%end if%>