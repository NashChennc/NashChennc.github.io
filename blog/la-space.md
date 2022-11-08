# 1. 线性空间

## 1.1. 线性空间

如果一个交换群 $(\mathbb V,\oplus)$ 关于一个(数)域 $\mathbb F$ 定义了

**数乘** $\cdot:(\mathbb F,\mathbb V)\mapsto \mathbb V$ ，对 $\lambda,\mu\in\mathbb F,\mathbf x,\mathbf y\in\mathbb V$ ，满足

* 封闭 $\lambda\mathbf x\in\mathbb V$
* 结合律 $(\lambda\mu) \mathbf x=\lambda (\mu \mathbf x)$
* 单位元 $1\mathbf x=\mathbf x$
* 左分配律 $(\lambda+\mu) \mathbf x=\lambda \mathbf x+\mu \mathbf x$
* 右分配律 $\lambda (\mathbf x+\mathbf y)=\lambda \mathbf x+\lambda \mathbf y$

则称 $\mathbb V$ 是 $\mathbb F$ 上的一个 **线性空间** 。从上面可以看出来，$\mathbb V(\mathbb F)$ 应当满足 $10$ 条性质，分别是

* $(\mathbb V,\oplus)$ ：交换群 $(4+1\text{条})$

* 数乘：关于 $\mathbb F$ 封闭、结合、有单位元、分配律 $(3+2\text{条})$

需要指出的是，数乘是两个集合的元素之间的运算，我们并未定义 $\mathbb V$ 内的乘法。但我们仍可以看出这个定义非常像环。

## 1.2. 子空间

设 $\mathbb V$ 是 $\mathbb F$ 上的一个线性空间， $\mathbb U\subset\mathbb V$ ，且 $\mathbb U$ 仍是 $\mathbb F$ 上的线性空间，则称 $\mathbb U$ 是 $\mathbb V$ 的 **子空间** 。由于运算定义相同，只需验证 $\mathbb U$ 是 $\mathbb V$ 的子群且数乘封闭。更进一步，只需验证加法和数乘的封闭性即可。

定义 **子空间的和** 为各自元素的和的全体组成的集合

$$\mathbb V=\mathbb U_1+\mathbb U_2+\cdots+\mathbb U_n=\{u\mid u=u_1+u_2+\cdots+u_n,u_i\in\mathbb U_i\}$$

容易验证，子空间的和是包含 $\mathbb U_i$ 的最小子空间。

特别地，如果 $\forall u\in\mathbb V$ ，其组合形式唯一 ，我们称这是子空间的 **直和** 。

> **定理 1.3.1:** 子空间的和是直和，当且仅当 $u=0$ 的组合只有 $\forall i,u_i=0$ 一种

> 必要性 $(\Rightarrow)$ 显然。

> 充分性 $(\Leftarrow)$ ：$\forall v\in\mathbb V$，假设其表示方法不唯一，即设

> $$v=u_1+u_2+\cdots+u_n=u'_1+u'_2+\cdots+u'_n$$

> 其中 $u_i=u'_i$ 不全成立。则有

> $$0=v-v=(u_1-u'_1)+\cdots+(u_n-u'_n)$$

> 存在唯一解 $u_i-u'_i=0$ ，即 $u_i=u'_i$ 。矛盾！于是 $\forall v\in \mathbb V$ ，其组合形式唯一。

---

**定理 1.3.2:** $U+V$ 是直和，当且仅当 $W=U\cap V=\{0\}$

首先，任意线性空间都应包含 $0$ ，因此 $0\in W$ 。设 $v\in W$

子空间两两为直和并不蕴含它们全体的和为直和。

## 1.3. 线性组合与张成空间

对一组向量 $v_1,v_2,...,v_n\in \mathbb V$ ，我们称

$$\sum_{k=1}^na_kv_k,\quad a_k\in\mathbb F$$

为这组向量的 **线性组合**。记一组向量的所有线性组合为这组向量的 **张成空间** ，记作

$$\langle v_1,v_2,...,v_n\rangle=\textrm{span}(v_1,v_2,...,v_n)=\{u\mid u=\sum_{k=1}^na_kv_k,\quad a_k\in\mathbb F\}$$

容易证明，一组向量的张成空间是包含这组向量的最小线性空间。

对一个空间，如果存在一组有限多的向量张成这个空间，则称它是 **有限维向量空间** 。否则称它是无限维的。

我们讨论一组线性组合的唯一性问题。如果

$$\forall v,\quad v=\sum_{k=1}^na_kv_k$$

其中系数组 $a_k$ 唯一确定，则我们称这组向量是 **线性无关** 的。类似子空间中的结论，我们有等价定义

$$0=\sum_{k=1}^na_kv_k \Rightarrow a_k=0$$

## 1.4. 对偶空间

$$V^*=\mathcal L(\mathbb V(\mathbb F),\mathbb F)$$

# 2. 线性映射

设 $\mathbb V_1,\mathbb V_2$ 是 $\mathbb F$ 上的两个线性空间。如果存在映射 $\mathscr A:\mathbb V_1\rightarrow\mathbb V_2$ ，满足

$$\mathscr A(x+y)=\mathscr A(x)+\mathscr A(y),\forall x,y\in\mathbb V_1$$

$$\mathscr A(\lambda x)=\lambda\mathscr A(x),\forall \lambda\in\mathbb F,x\in\mathbb V_1$$

则称 $\mathscr A$ 是 **同态映射** 。在线性代数中，我们也称 $\mathscr A$ 是 **线性映射** 。如果 $\mathbb V_1=\mathbb V_2$ ，则称为 **线性变换**。

如果 $\mathscr A$ 可逆，那么称 $\mathscr A$ 是 **同构映射**，并称 $\mathbb V_1$ 和 $\mathbb V_2$ **同构**。

## 2.1. 坐标

设 $\mathbb V_1$ 有一组基 $M_1=(\alpha_1,\alpha_2,\cdots,\alpha_{n_1}),\ n_1=\dim\mathbb V_1$ ，则 $\forall \mathbf x\in \mathbb V_1$ 有这组基下的唯一表示

$$\mathbf x=\sum_{k=1}^{n_1} x_k\alpha_k=(\alpha_1,\alpha_2,\cdots,\alpha_{n_1})\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix}=M_1\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix}$$

我们称

$$\sigma_{M_1}(\mathbf x)=\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix}\in \mathbb F^{n_1\times 1}$$

为 $\mathbf x$ 在 $M_1$ 这组基下的 **坐标**，且有等式 $\mathbf x=M_1\cdot\sigma_{M_1}(\mathbf x)$ 。容易验证 $\sigma_{M_1}(\mathbf x):\mathbb V_1\rightarrow\mathbb F^{n_1\times 1}$ 是同构映射。

注意到

$$\mathscr A(\mathbf x)=\mathscr A(M_1\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix})=\mathscr A(M_1)\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix}=\sum_{k=1}^{n_1} x_k\mathscr A(\alpha_k)$$

有

$$\sigma_{M_1}(\mathbf x)=\sigma_{\mathscr A(M_1)}(\mathscr A(\mathbf x))$$

## 2.2. 线性映射的矩阵

设 $\mathbb V_2$ 有一组基 $M_2=(\beta_1,\beta_2,\cdots,\beta_{n_2}),\ n_2=\dim V_2$ ，我们有

$$\sigma_{M_2}(\mathscr A(\mathbf x))=\sigma_{M_2}(\sum_{k=1}^{n_2} x_k\mathscr A(\alpha_k))=\sum_{k=1}^{n_2} x_k\sigma_{M_2}(\mathscr A(\alpha_k))$$

记

$$A_k=\sigma_{M_2}(\mathscr A(\alpha_k))=\begin{pmatrix}a_{k,1}\\a_{k,2}\\\vdots\\a_{k,n_2}\end{pmatrix}\in \mathbb F^{n_1\times 1}$$

设 $A=(A_1,\cdots,A_{n_1})\in\mathbb F^{n_1\times n_2}$ ，有

$$\sigma_{M_2}(\mathscr A(\mathbf x))=A\sigma_{M_1}(\textbf x)$$

我们发现，线性映射 $\mathbf x\mapsto \mathscr A(\mathbf x)$ 可以由坐标的映射 $\sigma_{M_1}(\textbf x)\mapsto A\sigma_{M_1}(\textbf x)$ 完全代表。并且

$$\mathbf x\mapsto \mathscr A(\mathbf x):\mathscr A(M_1\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix})=M_2A\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix}$$

我们称 $\mathbb V_1$ 的基 $M_1$ 的像，在 $\mathbb V_2$ 中的基 $M_2$ 下的坐标组成的矩阵

$$A=\sigma_{M_2}(\mathscr A(M_1))\in\mathbb F^{n_1\times n_2}$$

为 **线性映射 $\mathscr A:\mathbb V_1\rightarrow\mathbb V_2$ 在基 $M_1,M_2$ 下的矩阵** 。注意到 $M_2\cdot\sigma_{M_2}(\mathbf y)=\mathbf y$ ，上式左乘 $M_2$ 得

$$\mathscr A(M_1)=M_2A$$

事实上，线性映射本身也构成线性空间，且 $\mathscr A\mapsto A:\mathcal L(\mathbb V_1,\mathbb V_2)\rightarrow\mathbb F^{n_1\times n_2}$ 是同构映射。

## 2.3. 相似

线性映射 $\mathscr A:\mathbb V\rightarrow \mathbb V$ 称为 **线性变换**，此时取 $M=M_2=M_1$ ，我们有

$$\mathscr A(M)=MA$$

$$\mathbf x\mapsto \mathscr A(\mathbf x):\mathscr A(M\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix})=MA\begin{pmatrix}x_1\\x_2\\\vdots\\x_{n_1}\end{pmatrix}$$

称 $\mathbb V$ 的基 $M$ 变换后在原来的基 $M$ 下的坐标组成的方阵 $A$ 为 **线性变换 $\mathscr A$ 在基 $M$ 下的方阵**

考虑同一线性变换在不同基下的表示。设 $M_1,M_2$ 是 $\mathbb V$ 的基，考虑线性变换 $\mathscr A$ 分别在基 $M_1$ 下的方阵和在基 $M_2$ 下的方阵 $A_1,A_2$

$$\mathbf x\mapsto \mathscr A(\mathbf x):\mathscr A(M_1\begin{pmatrix}x_1\\x_2\\\vdots\\x_n\end{pmatrix})=M_1A_1\begin{pmatrix}x_1\\x_2\\\vdots\\x_n\end{pmatrix}$$

$$\mathbf x\mapsto \mathscr A(\mathbf x):\mathscr A(M_2\begin{pmatrix}y_1\\y_2\\\vdots\\y_n\end{pmatrix})=M_2A_2\begin{pmatrix}y_1\\y_2\\\vdots\\y_n\end{pmatrix}$$

对同一个元素

$$\mathbf x=M_1\begin{pmatrix}x_1\\x_2\\\vdots\\x_n\end{pmatrix}=M_2\begin{pmatrix}y_1\\y_2\\\vdots\\y_n\end{pmatrix}$$

设 $M_1P=M_2$ ，那么 $P^{-1}\begin{pmatrix}x_1\\x_2\\\vdots\\x_n\end{pmatrix}=\begin{pmatrix}y_1\\y_2\\\vdots\\y_n\end{pmatrix}$

那么

$$M_1A_1\begin{pmatrix}x_1\\x_2\\\vdots\\x_n\end{pmatrix}=M_2A_2\begin{pmatrix}y_1\\y_2\\\vdots\\y_n\end{pmatrix}=M_1PA_2P^{-1}\begin{pmatrix}x_1\\x_2\\\vdots\\x_n\end{pmatrix}$$

得到线性变换 $\mathscr A$ 分别在基 $M_1$ 下的方阵和在基 $M_2=M_1P$ 下的方阵 $A_1,A_2$ 满足

$$P^{-1}A_1P=A_2$$

我们称 $A_1$ 和 $A_2$ **相似** 。

易证对于多项式 $f(A)$ ，有

$$P^{-1}f(A)P=f(P^{-1}AP)$$

## 2.4. 特征值

我们研究相似的对角化

$Ax=\lambda x$ ，则称 $\lambda$ 是 $A$ 的 **特征值**

解 $(\lambda I-A)x=0$ ，即 $f(\lambda)=|\lambda I-A|=0$ 可以得到特征值

特征多项式解得 $\lambda_i$ 的重数 $n_i$ 称为 **代数重数**

$\mathcal{Ker}(\lambda_i I-A)$ 称为 $A$ 关于特征值 $\lambda_i$ 的 **特征子空间** ，其维数 $m_i=\dim\mathcal{Ker}(\lambda_i I-A)$ 称为 **几何重数**

有 $1\leq m_i\leq n_i$

取等时可以对角化，只需取各特征子空间的一组基构成转换矩阵 $P$ 即可

$$(\alpha_1,\cdots,\alpha_n)\begin{pmatrix}\lambda_1\\& \lambda_2\\&&\ddots\\&&& \lambda_n\end{pmatrix}=A(\alpha_1,\cdots,\alpha_n)$$

$m_i<n_i$ 的情况在下一节的若尔当型里介绍

## 2.5. 特征空间

## 2.6. 最小多项式

特征多项式是零化多项式

# 3. 若尔当型

根子空间

不变子空间

循环子空间
