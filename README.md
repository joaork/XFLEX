<div align="center":>
  <img src="https://xflex.chtech.info/wp-content/themes/xflex_wordpress_theme/assets/img/xflexlogo.png" alt="XFLEX Logo" width="280"/>

  #
  **XFLEX - E-commerce**

  ![Project Status](https://img.shields.io/badge/status-concluido-brightgreen) ![Project Type](https://img.shields.io/badge/type-freelance-blue)

  [![WordPress](https://img.shields.io/badge/WordPress-6.x-21759B?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org/)
  [![WooCommerce](https://img.shields.io/badge/WooCommerce-10.x-96588A?style=for-the-badge&logo=woocommerce&logoColor=white)](https://woocommerce.com/)
  [![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
  [![HTML5 & CSS3](https://img.shields.io/badge/HTML5_&_CSS3-E34F26?style=for-the-badge&logo=html5&logoColor=white)]()
  [![Boxicons](https://img.shields.io/badge/Boxicons-2.1.4-5468ff?style=for-the-badge)]()
</div>

<br>

## 📌 Sobre o Projeto

O **XFLEX** é uma plataforma de e-commerce completa voltada para o mercado de moda masculina.

---

## ✨ Funcionalidades Principais

* **Foco Mobile-First Avançado:** Interface ajustada para smartphones, trazendo uma experiência fluida de navegação por toque e carregamento instantâneo de imagens em proporção vertical de passarela (4:5).
* **Sistema Nativo de Favoritos via AJAX/LocalStorage:** Desenvolvimento de uma sidebar de itens favoritos construída do zero, integrada assincronamente ao WooCommerce, permitindo favoritar/desfavoritar produtos sem recarregar a tela.
* **Cabeçalho Inteligente Dinâmico:** Controle estrito de elementos que esconde blocos de ruído (como barras de pesquisa globais) no celular, agrupando utilitários em um menu lateral responsivo de alta performance.
* **Carrinho Mobile Inteligente (Card-Based UI):** Quebra completa das tabelas nativas e confusas do WooCommerce em resoluções menores, transformando itens em cartões individuais focados no uso do polegar (Touch-Friendly).
* **Grade Auto-Adaptável:** Grelha de produtos inteligente com inteligência contra quebra de metadados (*Anti-Mid-Word Breaking*), forçando categorias e coleções longas a fluírem sem cortes ou hifens.
* **Emails Transacionais:** Substituição completa da estrutura padrão de e-mails do WooCommerce através de templates unificados (`email-header.php` e `email-footer.php`), aplicando o gradiente escuro e cabeçalhos idênticos aos do site físico.
* **Newsletter:** Integração nativa com o Mailchimp para WordPress (MC4WP) mantendo regras estritas de estilos brutalistas e campos de captura unificados.
* **Sistema de Paginação:** Arquitetura limpa limitada a 8 produtos por loop via filtros no `functions.php`, aliviando o processamento do servidor e eliminando páginas pesadas de rolagem infinita.

---

### Fluxo de Renderização do Sticky Footer:
Para impedir que páginas com poucos elementos (como carrinho vazio ou tela de login) deixassem o rodapé "flutuando" no meio da tela, foi arquitetada uma solução flexível com CSS Grid e Flexbox no `body`:
1. O container `body` assume `min-height: 100vh` e direção em coluna.
2. A tag `<main>` e os blocos de conteúdo injetam `flex: 1 0 auto`.
3. O `.footer` recebe `margin-top: auto`, cravando o fechamento do site na base inferior do monitor de forma responsiva e sem alterar o alinhamento esquerdo da grade de produtos.

---

## 🛠️ Tecnologias Utilizadas

**Front-end:**
* **HTML5 Semântico:** Estruturação otimizada para SEO e acessibilidade.
* **CSS3 Avançado:** Uso extensivo de Variáveis Nativas (`:root`), Flexbox para alinhamentos geométricos e CSS Media Queries cirúrgicas para quebra em `768px`.
* **Vanilla JavaScript:** Gerenciamento do DOM de ponta a ponta sem dependência de bibliotecas de terceiros como jQuery para as novas animações.
* **Boxicons CSS:** Biblioteca de ícones vetorizados ultra-leve integrada diretamente via CDN.

**Backend:**
* **WordPress Core (6.x):** Base estrutural e gerenciamento de posts/páginas.
* **WooCommerce Engine (10.x):** Motor de gerenciamento de inventário, taxas, regras de frete e controle de checkout.
* **PHP Orientado a Objetos e Funcional:** Uso de ganchos (*actions* e *filters*) nativos do ecossistema do WordPress, manipulação de buffers com `gettext` e tratamento seguro de URLs absolutas com `esc_url()`.
