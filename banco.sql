Create DATABASE login_futebol;
use login_futebol;

create table usuarios (
    pk int AUTO_INCREMENT PRIMARY KEY,
    username varchar (120) not null unique,
    senha varchar (225) not null
    );

   INSERT INTO usuarios (username, senha) VALUES ('admin','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
   INSERT INTO usuarios (username, senha) VALUES ('root','123');
