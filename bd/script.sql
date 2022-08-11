create database if not exists supermanga;
use supermanga;

create or replace table login(
    id int primary key auto_increment,
    user varchar(240) not null,
    age int not null,
    foto longtext not null,
    email varchar(250) not null unique,
    senha varchar(255) not null,
    cargo int not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

create or replace table manga(
    id int primary key auto_increment,
    titulo varchar(250) not null,
    anime varchar(250) not null,
    volume int not null,
    categoria varchar(250) not null,
    sumario longtext not null, 
    capa longtext not null,
    conteudo longtext,
    nota int not null,
    acesso int not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

create or replace table favorite(
    favorite_id int primary key auto_increment, 
    favorite_by int not null, 
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP, 
    CONSTRAINT FK_UserID FOREIGN KEY (favorite_by) REFERENCES login(id) on delete cascade
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


insert into login(user, age, email, senha, cargo) values('admin', 100, 'admin@manga.com', md5('admin123'), 1);
insert into manga(titulo, capa, conteudo, anime, volume, categoria, sumario) values
    ("Bleach - Vol.1", "https://static3.mangalivre.net/capas/yz9Ih-chRWHC4_EwUEh87Q/12470/6070485866f5dexternal_cover.jpg", "?", "Bleach", 1, "Shounen", "A história gira em torno de Kurosaki Ichigo um estudante de 15 anos que tem uma estranha capacidade de ver, tocar e falar com espíritos de pessoas mortas. Logo que o Shinigami (Deus da Morte) Kuchiki Rukia toma conhecimento dos poderes dele ela decide investigá-lo, e acaba em uma luta com um Hollow que foi atraído pelo forte poder espiritual de Ichigo, antes de ser derrotada pela criatura, Rukia passa seus poderes a Ichigo, o qual se torna um Shinigami, e após derrotar o Hollow ingressa em uma jornada para proteger os humanos e os espíritos da ameaça dos Hollows."),
    ("The God of Highschool - Vol.1", "https://static3.mangalivre.net/capas/whGb5uDbZIm8q-0Q7_RZ2w/428/62644409f151d_external_cover.jpg", "?", "The God of Highschool", 1, "Shounen", "Enquanto uma ilha desaparece pela metade da face do planeta, uma organização misteriosa está enviando convites para cada lutador habilidoso da Terra para participarem de um torneio. Se você vencer, você pode ter O QUE QUISER?. Eles estão recrutando apenas os melhores para lutarem com os melhores e clamar o título de The God of HighSchool!"),
    ("Tokyo Revengers - Vol.1", "https://static3.mangalivre.net/capas/c-aH6sSjILEMLNO--UVDMg/6950/613881e16f42fexternal_cover.jpg", "?", "Tokyo Revengers", 1, "Shounen", "Takemichi é um virgem desempregado de 26 anos que descobre que a garota que ele namorou durante o ensino médio - a única que ele já namorou - morreu. Então, após um acidente ele se encontra de volta ao passado, durante seus anos de ensino médio. Ele promete mudar o futuro e salvar a garota, e para isso, ele planeja subir até o topo da gangue de delinquentes mais brutal da região de Kantou. "),
    ("Kimetsu no Yaiba - Vol.23", "https://static3.mangalivre.net/capas/lRAq3QFSQQWlYp4-XojAOw/3364/6037ed57c7fd3external_cover.jpg", "?", "Kimetsu no Yaiba", 23, "Shounen", "O mangá conta a história de Tanjiro, o filho mais velho de uma família que é massacrada por um demônio e, a única sobrevivente do incidente foi umas das suas irmãs, que por causa do massacre acaba se transformando em um demônio. Então, o protagonista, Tanjiro, sai em uma jornada para tentar achar uma ''cura'' para a sua irmã..."),
    ("One Punch Man - Vol.23", "https://static3.mangalivre.net/capas/GobD71Oud_WrETBGiOKj5A/1036/6029419421cd0external_cover.jpg", "?", "One Punch Man", 23, "Super Hero Comic", "Conta o dia-a-dia de um herói normal que está infeliz por ser forte o bastante para derrotar todos os seus oponentes com apenas um soco, já que isso não lhe traz mais a sensação de adrenalina ao enfrentar um inimigo poderoso..."),
    ("One Piece - Vol.1", "https://static3.mangalivre.net/capas/gCELLr4DNpa4XBAy0RjmtA/13/623e0f34a0ce7_external_cover.jpg", "?", "One Piece", 1, "Shounen", "One Piece começa quando Gol D. Roger, o Rei Dos Piratas que possuiu tudo nesse mundo, antes de ser executado, diz que escondeu o seu tesouro em algum lugar da Grand Line, um oceano extremamente perigoso. Desde então muitos piratas se aventuram pela Grand Line para tentar encontrar o tesouro chamado One Piece. Um deles é Monkey D. Luffy, o garoto que, acidentalmente, comeu uma das Akuma No Mi, a Gomu Gomu No Mi (Fruta da Borracha), e agora ele pode esticar seu corpo como se fosse uma borracha. A jornada dele começa atrás de companheiros e um barco, que ele vai conseguindo pouco a pouco, pois tem um objetivo: Ser o Rei Dos Piratas!!"), 
    ("Black Clover - Vol.32", "https://static3.mangalivre.net/capas/OnrJwCIG8TXGkSojBye8Kg/1751/6247bfcc81ab9_external_cover.jpg", "?", "Black Clover", 32, "Shounen", "Em um mundo em que até as tarefas mais simples do dia a dia são feitas com o uso de magia, quem não consegue usá-la é tratado como nada! Esta é a vida de Asta, um jovem que mesmo sem um pingo de magia, sonha em se tornar o Mago Imperador, o mais forte de todos os magos! Com muito esforço e trabalho duro, será ele capaz de atingir seus objetivos e superar seu genial rival e amigo de infância, Yuno?!!"),
    ("Monster - Vol.1", "https://static3.mangalivre.net/capas/LfcOCufAI2mCkoyixaDf1g/1335/external_cover.jpg", "?", "Monster", 1, "Seinen", "A aterrorizante história começa quando o Dr. Tenma, o mais jovem e renomado neurocirurgião do Hospital Memorial Eisler de Dusseldorf, desobedece as ordens de seu chefe (e sogro) e ao invés de salvar a vida do prefeito da cidade, salva a de uma criança (já que ela havia chegado ao pronto socorro antes do prefeito). Como consequência, o prefeito recebe cuidados médicos abaixo do necessário e morre. Tenma sente-se feliz por ter feito a escolha certa mas as consequências viriam a seguir... Consequências FATAIS! Quais serão elas?"),
    ("Jujutsu Kaisen - Vol.15", "https://static3.mangalivre.net/capas/a3QXgz41RaXH1M3QeHuZ5A/7178/603a47c046ee3external_cover.jpg", "?", "Jujutsu Kaisen", 15, "Shounen", "Jujutsu Kaisen Yuji é um gênio do atletismo, mas não tem interesse algum em ficar correndo em círculos. Ele é feliz como membro no Clube de Estudo de Fenômenos Psíquicos. Apesar de estar no clube apenas por diversão, tudo fica sério quando um espírito de verdade aparece na escola! A vida está prestes a se tornar muito interessante na Escola Sugisawa..."), 
    ("Hunter x Hunter - Vol.26", "https://static3.mangalivre.net/capas/XcOUGVTSAikS3oMtG79h4Q/59/external_cover.jpg", "?", "Hunter x Hunter", 26, "Shounen", "Hunters são uma raça especial, dedicada a rastrear tesouros, animais mágicos, e até mesmo outros homens. Mas tais atividades requerem uma licença, e menos de um em cem mil pode passar no exame de qualificação esgotante. Aqueles que não passam tem acesso a áreas restritas, lojas de incríveis informações, bem como o direito de chamar-se de Hunters.");