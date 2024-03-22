<%@page contentType="text/html" pageEncoding="UTF-8" %>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Addition</title>
        <style>
            .dp {
                margin: 80px 450px;
                height: 200px;
                border-color: black;
                border-style: solid;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="dp">
            <% int n1, n2, n; n1=Integer.parseInt(request.getParameter("t1"));
                n2=Integer.parseInt(request.getParameter("t2")); n=n1+n2; %>
                <%= "The Addition=" +n%>
        </div>
    </body>

    </html>