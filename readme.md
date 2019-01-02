## Funcionamiento
1. El usuario debe iniciar sesión con su email y contraseña para obtener el token.

    ```
        POST http://127.0.0.1:8000/api/auth/login
    ```

    ```json
    // response
    {
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTU0NjQwNjEwMiwiZXhwIjoxNTQ2NDA5NzAyLCJuYmYiOjE1NDY0MDYxMDIsImp0aSI6IlRCVDZENFNkZ09UNHdONmgiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZlbwELkx07NL3CyyXIuy7srXi4hz6msNBbYQ4bPHeq0",
        "token_type": "bearer",
        "expires_in": 3600
    }
    ```
2. El usuario debe de hacer peticiones a la api con el token en especificado en el header

    ```
    POST /api/auth/me HTTP/1.1
    Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTU0NjQwNjEwMiwiZXhwIjoxNTQ2NDA5NzAyLCJuYmYiOjE1NDY0MDYxMDIsImp0aSI6IlRCVDZENFNkZ09UNHdONmgiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ZlbwELkx07NL3CyyXIuy7srXi4hz6msNBbYQ4bPHeq0
    ```
    
    ```json
    // response
    {
        "id": 1,
        "name": "Ignacio",
        "email": "josenachito@live.ru",
        "created_at": "2019-01-02 04:10:06",
        "updated_at": "2019-01-02 04:10:06"
    }
    ```

