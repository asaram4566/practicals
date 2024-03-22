<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1" errorPage="error.jsp" %>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="ISO-8859-1">
        <style type="text/css">
            div {
                border-style: solid;
                text-align: center;
                width: 284px;
                position: absolute;
                height: 85px;
                left: 600px;
                top: 80px;
            }
        </style>
        <title>Insert title here</title>
    </head>

    <body>
        <div>

            <% String n1,n2; n1=request.getParameter("t1"); n2=request.getParameter("t2"); %>

                <% int p,q; double r; p=Integer.parseInt(n1); q=Integer.parseInt(n2); r=p/q; %>
                    <h4>The Division Result=<%=r %>
                    </h4>

        </div>
    </body>

    </html>