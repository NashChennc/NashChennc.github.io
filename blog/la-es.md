# 1. 矩阵的引入

考虑向量之间的一个完全的一次映射

$$\vec x\in\mathbb F^m\mapsto \vec y\in\mathbb F^n:y_1=\sum_ja_{ij}x_i$$

即

$$\begin{cases}
y_1=a_{1,1}x_1+a_{1,2}x_2+\cdots+a_{1,m}x_m\\
y_2=a_{2,1}x_1+a_{2,2}x_2+\cdots+a_{2,m}x_m\\
\cdots\cdots\\
y_n=a_{n,1}x_1+a_{n,2}x_2+\cdots+a_{n,m}x_m\\
\end{cases}$$

可以看到，$\vec x$ 的每一个分量和 $\vec y$ 的每一个分量都建立了一次的联系。这种映射称为 **线性映射** ，也称 **线性变换** 。将系数写成一个矩阵

$$A_{n\times m}=\begin{pmatrix}
a_{1,1} & a_{1,2} & \cdots & a_{1,m}\\
a_{2,1} & a_{2,2} & \cdots & a_{2,m}\\
\\
\vdots & \vdots & \ddots & \vdots\\
a_{n,1} & a_{n,2} & \cdots & a_{n,m}\\
\end{pmatrix}$$

容易想到矩阵之间应当具有运算。容易发现矩阵的相加可以良好地被定义为对应位置相加，进而有良定的数乘。

矩阵可以记作 $A_{n\times m}=\sum_i\sum_ja_{ij}E_{ij}$，其中 $E_{ij}$ 是一个仅在第 $i$ 行第 $j$ 列有有一个 $1$ 的矩阵，称为基本矩阵。

# 2. 矩阵乘法

我们现在定义一个矩阵之间良定的乘法，于是研究线性映射的复合，将复合看作对于一种映射之间的乘法

$$\vec x\in\mathbb F^m\mapsto \vec z\in\mathbb F^l\mapsto \vec y\in\mathbb F^n:y_i=\sum_k a_{ik}z_k,\ z_k=\sum_j b_{kj}x_j
$$

得到

$$\vec x\in\mathbb F^m\mapsto \vec y\in\mathbb F^n:y_i=\sum_ka_{ik}\sum_j b_{kj}x_j=\sum_j(\sum_ka_{ik}b_{kj})x_j$$

于是，我们规定

$$A_{n\times l}\times B_{l\times m}\triangleq \sum_i\sum_j(\sum_ka_{ik}b_{kj})E_{ij}=\begin{pmatrix}
\sum_ka_{1k}b_{k1} & \sum_ka_{1k}b_{k2} & \cdots & \sum_ka_{1k}b_{km}\\
\sum_ka_{2k}b_{k1} & \sum_ka_{2k}b_{k2} & \cdots & \sum_ka_{2k}b_{km}\\
\\
\vdots & \vdots & \ddots & \vdots\\
\sum_ka_{nk}b_{k1} & \sum_ka_{nk}b_{k2} & \cdots & \sum_ka_{nk}b_{km}\\
\end{pmatrix}$$

可以观察到对于两个线性变换

$$\phi_B(\phi_A(\vec x))=(\phi_B\circ\phi_A)(\vec x)=\phi_{A\times B}(\vec x)$$

这个定义是自然的。你需要注意到矩阵的乘法本质上是线性映射的复合，而复合大多数是不满足交换律的。同时，因为这是映射的复合运算，因此满足结合律。有关运算法则的定律在抽象代数中有证明。由上面的推导可以知道，在矩阵的运算中要注意运算顺序。

长宽相等的矩阵称为 **方阵**，其长宽称为方阵的阶。下面是基本的方阵，其性质显然，不再赘述

$$O=\begin{pmatrix}
0 & 0 & \cdots & 0\\
0 & 0 & \cdots & 0\\&&&\\
\vdots & \vdots & \ddots & \vdots\\
0 & 0 & \cdots & 0\\
\end{pmatrix},
I=\begin{pmatrix}
1\\
& 1\\\\
&& \ddots\\
&&& 1\\
\end{pmatrix},
{\rm diag}(a_1,a_2,...,a_n)=\begin{pmatrix}
a_1\\
& a_2\\\\
&& \ddots\\
&&& a_n\\
\end{pmatrix}$$

对一个矩阵，行列下标相同的元素我们称为 **对角元** 。

# 3. 初等行变换

考虑由 $n$ 条 $m$ 元一次方程组成的方程组

$$\begin{cases}
a_{1,1}x_1+a_{1,2}x_2+\cdots+a_{1,m}x_m=b_1\\
a_{2,1}x_1+a_{2,2}x_2+\cdots+a_{2,m}x_m=b_2\\
\cdots\cdots\\
a_{n,1}x_1+a_{n,2}x_2+\cdots+a_{n,m}x_m=b_n\\
\end{cases}$$

现在我们可以看作 $\vec x$ 进行了一个线性映射，得到了 $\vec b$

$$\begin{pmatrix}
a_{1,1} & a_{1,2} & \cdots & a_{1,m}\\
a_{2,1} & a_{2,2} & \cdots & a_{2,m}\\
\\
\vdots & \vdots & \ddots & \vdots\\
a_{n,1} & a_{n,2} & \cdots & a_{n,m}\\
\end{pmatrix}\begin{pmatrix}
x_1\\x_2\\\\\vdots\\x_m\\
\end{pmatrix}=\begin{pmatrix}
b_1\\b_2\\\\\vdots\\b_n\\
\end{pmatrix}$$

我们研究这个方程组的解的情况，以便得到该线性变换的性质。为了方便，简写成 **增广矩阵** 。

$$\begin{pmatrix}
a_{1,1} & a_{1,2} & \cdots & a_{1,m} & | & b_1\\
a_{2,1} & a_{2,2} & \cdots & a_{2,m} & | & b_2\\&&&& |\\
\vdots & \vdots & \ddots & \vdots & | & \vdots\\
a_{n,1} & a_{n,2} & \cdots & a_{n,m} & | & b_n\\
\end{pmatrix}$$

考虑到不同方程非零线性组合之后不会改变方程组的解，我们尝试对增广矩阵的行之间作一些基本的变换。以下三种操作被称为 **初等行变换**

* $r_i\leftrightarrow r_j$ ：交换第 $i$ 和第 $j$ 行

* $\lambda r_i$ ：对第 $i$ 行全部乘以非零常数 $\lambda$

* $\lambda r_i\rightarrow r_i$ ：将第 $i$ 行的非零常数 $\lambda$ 倍加至第 $j$ 行

列变换同理，简写时将 **r**ow 换成 **c**olumn 即可。不失一般性地，下文只讨论行变换。

如果分别对单位矩阵作这些操作，可以得到如下的 **初等矩阵**

$$S_{ij}=\begin{pmatrix}
\ddots\\
& 0 && 1\\
&&\ddots\\
& 1 && 0\\
&&&& \ddots\\
\end{pmatrix}
\begin{aligned}
\\
\leftarrow i^{th}\\\\
\leftarrow j^{th}\\\\
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

容易验证，对矩阵 $A$ 或增广矩阵 $(A,\vec b)$ 作初等行变换等价于与这些初等矩阵相乘

$$\begin{aligned}
A_{n\times m} & \mathop{\longrightarrow}\limits^{r_i\leftrightarrow r_j} & S_{ij,n\times n}\times A_{n\times m}\\
A_{n\times m} & \mathop{\longrightarrow}\limits^{\lambda r_i} & D_i(\lambda)_{n\times n}\times A_{n\times m}\\
A_{n\times m} & \mathop{\longrightarrow}\limits^{\lambda r_i\rightarrow r_j} & T_{ij}(\lambda)_{n\times n}\times A_{n\times m}
\end{aligned}$$

此处要注意到，行变换是左乘，列变换是右乘。如果矩阵元素不交换，例如是矩阵，此时会有区别。

# 4. 高斯消元

**高斯消元法** 指的是按先后次序枚举矩阵 $A$ 或增广矩阵 $(A,\vec b)$ 的每一行，基于第该行用加减消元消去某列的其它元素，最终尝试将矩阵消元至对角矩阵、阶梯矩阵或上三角矩阵。

例如正在枚举第 $i$ 行，则反复对 $j\not= i$ 的行作行变换 $(-\frac {a_{j,i}}{a_{i,i}} r_i\rightarrow r_j)$ 。如果发现 $a_{i,i}=0$ ，则将第 $i$ 列有非零值的行交换到该行。

若这样做，已经枚举过的列将会只剩下对角元，枚举下一行时进行行变换时也不会影响到之前的列。也可以对 $j<i$ 的行不作行变换，这样最终在矩阵的右上方仍有一系列的值，而不是剩下对角矩阵。但这不影响我们对解的情况的判断。

一旦发现第 $i$ 列从第 $i$ 行开始全为 $0$，我们从下一列开始，即 $a_{i,i+1}$ 处直至右下角认为这是一个新的矩阵，重新开始高斯消元，并可以对 $i$ 之前的行也进行消元。若仍找不到第 $i+1$ 列有非零值的行，则继续向右。

注意到这样做有可能会减少矩阵的行数，也就是方程的条数。但因为行变换不改变方程的解，最终呈现的形式是有意义的 **最简形式** ，也称 **标准形式**，一般是一个阶梯矩阵。设该矩阵有 $r$ 行 $(r\leq m)$。

$$\begin{pmatrix}
c_{1,1} & c_{1,2} & \cdots & c_{1,m} & | & d_1\\
& c_{2,2} & \cdots & c_{2,m} & | & d_2\\&&&& |\\
\vdots &  & \ddots & \vdots & | & \vdots\\
&&& c_{r,m} & | & d_r\\
0 &  & \cdots & 0 & | & d_{r+1}
\end{pmatrix}$$


容易想到，所有的列分为三种。记每一行的开头位置为 $s_i,\ i\in[1,r]$

1. 对第 $s_i$ 列，经过消元只有 $c_{i,s_i}$ 处有一个非零值

2. 对其它总共 $m-r$ 列，$c_{i,k},k\leq s_i$ 没有经过消元

3. 最后一列。行数减少可能出现的增广部分残余

于是，我们得到了解的判定

### 线性方程的解的判定

* 若 $d_{r+1}\not= 0$ ，矛盾，方程组无解

* 若 $d_{r+1}= 0,\ r=n$ ，此时仅对角元有值，方程有唯一解

* 若 $d_{r+1}= 0,\ r<n$ ，方程有多组解。将第二种行移至等式右边，可以得到方程的解的一组参数表示形式。


代码：咕咕

注意，在对合数取模的运算中，行变换应采用辗转相除法实现。

# 5. 矩阵性质相关运算

设 $A_{n\times m}=\sum_i\sum_ja_{ij}E_{ij}$ 。

### 矩阵的转置

行列交换后的矩阵称为 $A$ 的 **转置**，记作

$$A^T_{m\times n}=\sum_i\sum_ja_{ji}E_{ji}=\begin{pmatrix}
a_{1,1} & a_{2,1} & \cdots & a_{n,1}\\
a_{1,2} & a_{2,2} & \cdots & a_{n,2}\\
\\
\vdots & \vdots & \ddots & \vdots\\
a_{1,m} & a_{2,m} & \cdots & a_{n,m}\\
\end{pmatrix}
$$

转置满足 $(AB)^T=B^TA^T$

容易知道，$A^TA$ 对称。若 $A^TA=I$ 则称 $A$ 为正交方阵。正交方阵对应正交变换，即保欧氏距离但不保向的变换。

### 矩阵的共轭

对复矩阵，每个数改变为其共轭复数的矩阵 称为 $A$ 的**共轭**，记作

$$\overline {A_{m\times n}}=\sum_i\sum_j\overline {a_{ij}}E_{ij}
$$

### 方阵的逆

对方阵 $A_n$，若存在 $A_n^{-1}$ 使得

$$AA^{-1}=A^{-1}A=I_n$$

则称其为 **可逆方阵**。不可逆方阵则称为 **奇异方阵**。

可证逆矩阵 $A^{-1}$ 存在即唯一。除此之外，还有一些易证的结论

* $(A^{-1})^{-1}=A$

* $(\lambda A)^{-1}=\lambda^{-1}A^{-1}$

* $(AB)^{-1}=B^{-1}A^{-1}$

* $(A^{-1})^T=(A^T)^{-1}$

常用的计算公式

$$\begin{pmatrix}
a & b\\
c & d
\end{pmatrix}^{-1}=\frac 1{ad-bc}\begin{pmatrix}
b & -b\\
-c & a
\end{pmatrix}
$$

$$\begin{pmatrix}
\vec a\\
\vec b\\
\vec c
\end{pmatrix}^{-1}=\frac 1{(\vec a\times\vec b)\cdot \vec c}(\vec b\times \vec c,\vec c\times \vec a,\vec a\times \vec b)
$$

**方阵** 的对角元之和称为 **迹** ，记作 $tr(A)$ 。

可以对矩阵划分块来进行运算。这样相当于将矩阵作为矩阵的元素，进行运算仍遵守所有的运算法则即可。

# 6. 行列式

**行列式**是一种运算，记作 $|A|$ 或 $\det(A)$，得出的结果是一个数。

$n$ 阶行列式划掉第 $i$ 行第 $j$ 列，形成的 $n-1$ 阶方阵的行列式称为元素 $a_{i,j}$ 的 **余子式**，记作 $M_{i,j}$，并把 $(-1)^{i+j}M_{i,j}$。$M_{i,i}$ 也称为主子式。

行列式有如下的递归定义

$$\det(A_{n\times n})=\sum\limits_{i=1}^n(-1)^{i+j}a_{i,j}M_{i,j}$$

$$\det(A_{1\times 1})=a_{1,1}$$

根据递归定义容易想到，行列式是若干元素的乘积的容斥和。其中满足相乘的一组元素总共有 $n$ 个，且两两不在同一行或同一列。行列式的递归定义中，无论 $j$ 为何值，其结果一致。

$$\begin{vmatrix}
a & b\\
c & d
\end{vmatrix}=ad-bc$$

## 6.1. 行列式的等价定义

* 多重线性

容易证明，行列式对于每一行或列来说是线性的

$$\det\begin{pmatrix}\vec a_1\\\vdots\\\lambda\vec a_k+\mu\vec b_k\\\vdots\\\vec a_n\end{pmatrix}=\det\begin{pmatrix}\vec a_1\\\vdots\\\lambda\vec a_k\\\vdots\\\vec a_n\end{pmatrix}+\det\begin{pmatrix}\vec b_1\\\vdots\\\mu\vec b_k\\\vdots\\\vec b_n\end{pmatrix}=\lambda\det(A)+\mu\det(B)$$

因此有

$$\det(\lambda A)=\lambda^n\det(A)$$

* 反对称性

$$\det(S_{i,j}\times A)=-\det(A)$$

* 规范性

$$\det(I)=1$$

事实上，行列式是满足以上性质的唯一代数式。因此，也可用以上 $3$ 条性质作为行列式的定义。

## 6.2. 行列式的完全展开式

$$\det(A)=\sum(-1)^{\tau}\prod a_{i,j_i}$$

$$\det(A)=\det(A^T)$$

## 6.3. 行列式的计算

## 6.4. 行列式的性质

## 6.5. 秩与相抵
