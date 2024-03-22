<%@ page contentType="text/html; charset=UTF-8" %>
    <%@ page import="javax.servlet.http.*" %>
        <html>

        <head>
            <meta charset="UTF-8">
            <title>Session Example</title>
            <style>
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }

                h1 {
                    margin-bottom: 50px;
                }
            </style>
        </head>

        <body>
            <div style="border: 1px solid; padding: 70px;">
                <h1>Successfully Login</h1>
                <% if(request.getMethod().equalsIgnoreCase("post")) { String name=request.getParameter("uname");
                    out.print("Welcome " + name);
                session.setAttribute(" user", name); String userId=request.getParameter("userId");
                    session.setAttribute("userId", userId); %>
                    <p>To set session <a href="session2.jsp">click here</a></p>
                    <% } %>
            </div>
        </body>

        </html>