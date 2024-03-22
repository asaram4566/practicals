<%@ page contentType="text/html; charset=UTF-8" %>
    <%@ page import="javax.servlet.http.*" %>
        <html>

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>JSP Page</title>
            <style>
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }

                form {
                    text-align: center;
                    padding: 20px;
                }

                h1 {
                    margin-bottom: 20px;
                }
            </style>
        </head>

        <body>
            <div style="margin: 20%; border: 1px solid; padding: 50px;">
                <% String name2=(String) session.getAttribute("user"); out.print("Hello " + name2);
        %>
        <p>New session has been started..!</p>
    </div>
</body>
</html>