<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include './header.php'; ?>
    </head>
    <body>
        <div class="container">
            <?php include './menu.php'; ?>
            <div class="row">
                <div class="col-xs-10 col-lg-offset-1">
                    <h1 class="text-center">Um pouco de história...</h1>
                    <p class="text-justify">
                        Vamos, neste curso, aprender os conceitos básicos da linguagem de programação C a qual tem se tornado cada dia mais popular, devido à sua versatilidade e ao seu poder. Uma das grandes vantagens do C é que ele possui tanto características de "alto nível" quanto de "baixo nível".<br/>
                        O C nasceu na década de 70. Seu inventor, Dennis Ritchie, implementou-o pela primeira vez usando um DEC PDP-11 rodando o sistema operacional UNIX. O C é derivado de uma outra linguagem: o B, criado por Ken Thompson. O B, por sua vez, veio da linguagem BCPL, inventada por Martin Richards.<br/>
                        O C é uma linguagem de programação genérica que é utilizada para a criação de programas diversos como processadores de texto, planilhas eletrônicas, sistemas operacionais, programas de comunicação, programas para a automação industrial, gerenciadores de bancos de dados, programas de projeto assistido por computador, programas para a solução de problemas da Engenharia, Física, Química e outras Ciências, etc ... É bem provável que o navegador que você está usando para ler este texto tenha sido escrito em C ou C++.<br/>
                        Estudaremos a estrutura do ANSI C, o C padronizado pela ANSI. Veremos ainda algumas funções comuns em compiladores para alguns sistemas operacionais. Quando não houver equivalentes para as funções em outros sistemas, apresentaremos formas alternativas de uso dos comandos.
                    </p>

                    <h1 class="text-center">Estrutura da Linguagem</h1>

                    <p class="text-justify">Um programa em linguagem C é composto dos seguintes elementos:</p>

                    <ul class="text-justify">
                        <li><span>Diretivas de Compilação</span></li>
                        <li><span>Definições de Tipos</span></li>
                        <li><span>Protótipos de Funções</span></li>
                        <li><span>Funções</span></li>
                        <li><span>Comentários</span></li>
                    </ul>

                    <p class="text-justify">Segue abaixo o exemplo de um simples programa em C:</p>

                    <div class="scripts">
                        <pre class="brush: cpp">
                        // Primeiro programa em C

                        // Biblioteca de entrada e saída (Diretivas de Compilação)
                        #include&lt;stdio.h&gt;

                        // Definição de um tipo
                        #define HELLO "Hello World\n"

                        // Função main
                        int main(void) {

                            printf(HELLO);
                            return 0;

                        }
                        </pre>
                    </div>

                    <h1 class="text-center">Os tipos do C</h1>

                    <p class="text-justify">
                        O C tem 5 tipos básicos: char, int, float, void, double. Destes não vimos ainda os dois últimos: O double é o ponto flutuante duplo e pode ser visto como um ponto flutuante com muito mais precisão. O void é o tipo vazio, ou um "tipo sem tipo". A aplicação deste "tipo" será vista posteriormente. <br/>                
                        Para cada um dos tipos de variáveis existem os modificadores de tipo. Os modificadores de tipo do C são quatro: signed, unsigned, long e short. Ao float não se pode aplicar nenhum e ao double pode-se aplicar apenas o long. Os quatro modificadores podem ser aplicados a inteiros. A intenção é que short e long devam prover tamanhos diferentes de inteiros onde isto for prático. Inteiros menores (short) ou maiores (long). int normalmente terá o tamanho natural para uma determinada máquina. Assim, numa máquina de 16 bits, int provavelmente terá 16 bits. Numa máquina de 32, int deverá ter 32 bits. Na verdade, cada compilador é livre para escolher tamanhos adequados para o seu próprio hardware, com a única restrição de que shorts ints e ints devem ocupar pelo menos 16 bits, longs ints pelo menos 32 bits, e short int não pode ser maior que int, que não pode ser maior que long int. O modificador unsigned serve para especificar variáveis sem sinal. Um unsigned int será um inteiro que assumirá apenas valores positivos. A seguir estão listados os tipos de dados permitidos e seu valores máximos e mínimos em um compilador típico para um hardware de 16 bits. Também nesta tabela está especificado o formato que deve ser utilizado para ler os tipos de dados com a função scanf():
                    </p>

                    <table>
                        <tr>
                            <th>Tipo</th>
                            <th>Número de Bits</th>
                            <th>Formato de leitura(scanf)</th>
                            <th>Início</th>
                            <th>Fim</th>
                        </tr>

                        <tr>
                            <td>char</td>
                            <td>8</td>
                            <td>%c</td>
                            <td>-128</td>
                            <td>+127</td>
                        </tr>

                        <tr>
                            <td>unsigned char</td>
                            <td>8</td>
                            <td>%c</td>
                            <td>0</td>
                            <td>255</td>
                        </tr>

                        <tr>
                            <td>signed char</td>
                            <td>8</td>
                            <td>%c</td>
                            <td>-128</td>
                            <td>+127</td>
                        </tr>

                        <tr>
                            <td>int</td>
                            <td>16</td>
                            <td>%d</td>
                            <td>-32.768</td>
                            <td>+32.767</td>
                        </tr>

                        <tr>
                            <td>unsigned int</td>
                            <td>16</td>
                            <td>%u</td>
                            <td>0</td>
                            <td>65.535</td>
                        </tr>

                        <tr>
                            <td>signed int</td>
                            <td>16</td>
                            <td>%i</td>
                            <td>-32.768</td>
                            <td>+32.767</td>
                        </tr>

                        <tr>
                            <td>short int</td>
                            <td>16</td>
                            <td>%hi</td>
                            <td>-32.768</td>
                            <td>+32.767</td>
                        </tr>

                        <tr>
                            <td>unsigned short int</td>
                            <td>16</td>
                            <td>%hu</td>
                            <td>0</td>
                            <td>65.535</td>
                        </tr>

                        <tr>
                            <td>signed short int</td>
                            <td>16</td>
                            <td>%hi</td>
                            <td>-32.768</td>
                            <td>+32.767</td>
                        </tr>

                        <tr>
                            <td>long int</td>
                            <td>32</td>
                            <td>%li</td>
                            <td>-2.147.483.648</td>
                            <td>+2.147.483.647</td>
                        </tr>

                        <tr>
                            <td>signed long int</td>
                            <td>32</td>
                            <td>%li</td>
                            <td>-2.147.483.648</td>
                            <td>+2.147.483.647</td>
                        </tr>

                        <tr>
                            <td>unsigned long int</td>
                            <td>32</td>
                            <td>%lu</td>
                            <td>0</td>
                            <td>4.294.967.295</td>
                        </tr>

                        <tr>
                            <td>float</td>
                            <td>32</td>
                            <td>%f</td>
                            <td>3,4E-38</td>
                            <td>3,4E+38</td>
                        </tr>

                        <tr>
                            <td>double</td>
                            <td>64</td>
                            <td>%lf</td>
                            <td>1,7E-308</td>
                            <td>1,7E+308</td>
                        </tr>

                        <tr>
                            <td>long double</td>
                            <td>80</td>
                            <td>%Lf</td>
                            <td>3,4E-4932</td>
                            <td>3,4E+4932</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>
        </div>
    </div> 
    <?php include '../c/footer.php'; ?>
</div>
</body>
</html>