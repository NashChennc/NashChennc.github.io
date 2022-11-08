
# 3. 核与秩

设有一个线性映射 $\mathscr A:\mathbb V_1\rightarrow \mathbb V_2$ ，则

**核**

$$\mathcal{Ker} \mathscr A=\{x\in \mathbb V_1\mid \mathscr A(x)=0\}\subset \mathbb V_1$$

**像**

$$\mathcal{Im} \mathscr A=\{\mathscr A(x)\in\mathbb V_2\mid x\in\mathbb V_1\}\subset \mathbb V_2$$

**线性映射基本定理**

$$\dim \mathbb V_1=\dim\mathcal{Im}\mathscr A+\dim\mathcal{Ker}\mathscr A$$

且存在一组基 $M_1,M_2$ 使得 $\mathscr A$ 在这组基下的矩阵是

$$\begin{pmatrix}I_r \\ & O\end{pmatrix},r=\mathrm{rank}\mathscr A$$

证明留做习题

我们记 $\mathrm{rank}\mathscr A=\dim\mathcal{Im}\mathscr A$ 为线性映射 $\mathscr A:\mathbb V_1\rightarrow \mathbb V_2$ 的 **秩** 。

* 初等变换不改变矩阵的秩

## 3.2. 初等变换

以下三种操作被称为 **初等行变换**

* $r_i\leftrightarrow r_j$ ：交换第 $i$ 和第 $j$ 行

* $\lambda r_i$ ：对第 $i$ 行全部乘以非零常数 $\lambda$

* $\lambda r_i\rightarrow r_i$ ：将第 $i$ 行的非零常数 $\lambda$ 倍加至第 $j$ 行

列变换同理，简写时将 **r**ow 换成 **c**olumn 即可。不失一般性地，下文只讨论行变换。

如果分别对单位矩阵作这些操作，可以得到如下的 **初等矩阵**

$$S_{ij}=\begin{pmatrix}
1\\
& \ddots\\
&& 0 && 1\\
&&&\ddots\\
&& 1 && 0\\
&&&&& \ddots\\
&&&&&& 1
\end{pmatrix}
\begin{aligned}
\\\\
\leftarrow i^{th}\\\\
\leftarrow j^{th}\\\\\\
\end{aligned},
D_i(\lambda)=\begin{pmatrix}
\ddots\\
& 1\\
&&\lambda\\
&&& 1\\
&&&& \ddots\\
\end{pmatrix}
\begin{aligned}
\\\\
\leftarrow i^{th}\\\\\\
\end{aligned},
T_{ij}(\lambda)=\begin{pmatrix}
\ddots\\
& 1 && \lambda\\
&&\ddots\\
&&& 1\\
&&&& \ddots\\
\end{pmatrix}
\begin{aligned}
\\
\leftarrow i^{th}\\\\
\leftarrow j^{th}\\\\
\end{aligned}$$

容易验证，对矩阵 $A$ 作初等行变换等价于与这些初等矩阵相乘

$$\begin{aligned}
A_{n\times m} && \mathop{\longrightarrow}\limits^{r_i\leftrightarrow r_j} && S_{ij,n\times n}\times A_{n\times m}\\
A_{n\times m} && \mathop{\longrightarrow}\limits^{\lambda r_i} && D_i(\lambda)_{n\times n}\times A_{n\times m}\\
A_{n\times m} && \mathop{\longrightarrow}\limits^{\lambda r_i\rightarrow r_j} && T_{ji}(\lambda)_{n\times n}\times A_{n\times m}
\end{aligned}$$

列变换则是

$$\begin{aligned}
A_{n\times m} && \mathop{\longrightarrow}\limits^{c_i\leftrightarrow c_j} && A_{n\times m}\times S_{ij,m\times m}\\
A_{n\times m} && \mathop{\longrightarrow}\limits^{\lambda c_i} && A_{n\times m}\times D_i(\lambda)_{m\times m}\\
A_{n\times m} && \mathop{\longrightarrow}\limits^{\lambda c_i\rightarrow c_j} && A_{n\times m}\times T_{ij}(\lambda)_{m\times m}
\end{aligned}$$

需要指出，左乘一个初等矩阵可以实现行变换，右乘初等矩阵就是列变换。

其中最常用的 $T_{ij}(\lambda)=I+\lambda E_{ij}$ 作为行变换左乘时，$\lambda$ 出现在被加行。相应地作为列变换右乘时，$\lambda$ 出现在被加列。

事实上，我们可以扩展初等变换的定义。在保证运算成立的情况下，可以通过类似初等矩阵的构造方式对分块矩阵进行变换。下面给出一些例子

若 $A_{n\times n}$ 可逆，下式是一种没什么鬼用的行列式计算方法

$$\begin{pmatrix}I & O\\-CA^{-1} & I\end{pmatrix}\begin{pmatrix}A & B\\C & D\end{pmatrix}=\begin{pmatrix}A & B\\O & D-CA^{-1}B\end{pmatrix}$$

下式也是常见的变换。

$$\begin{pmatrix}I_n & A_{n\times m}\\B_{m\times n} & I_m\end{pmatrix}\begin{pmatrix}I \\-B & I\end{pmatrix}=\begin{pmatrix}I_n-AB & A\\ & I_m\end{pmatrix}$$

$$\begin{pmatrix}I \\-B & I\end{pmatrix}\begin{pmatrix}I_n & A_{n\times m}\\B_{m\times n} & I_m\end{pmatrix}=\begin{pmatrix}I_n & A\\ & I_m-BA\end{pmatrix}$$

值得一提的是，乘法的方向需要保留。即行变换只能乘在左边，列变换只能乘在右边。

## 3.3. 秩的等式与不等式

$$\textrm{rank}\begin{pmatrix}A & C\\ & B\end{pmatrix}\geq\textrm{rank}\begin{pmatrix}A \\ & B\end{pmatrix}=\textrm{rank}(A)+\textrm{rank}(B)$$

$$\textrm{rank}(AB)+\textrm{rank}(BC)\geq\textrm{rank}(ABC)+\textrm{rank}(B)$$

$$\textrm{rank}(A)+\textrm{rank}(B)\geq\textrm{rank}(AB)+n$$