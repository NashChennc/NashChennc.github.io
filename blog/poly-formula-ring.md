设有一个函数 $f:\mathbb F\rightarrow \mathbb F$ ，如果 $\forall x\in \mathbb F$ ，有

$$f(x)=\sum_{k=0}^na_kx^k,\ a_k\in \mathbb F,n\in\mathbb N,a_n\not=0$$

则称 $f$ 是一个 **多项式函数**，简称多项式。多项式的 $k$ 次项系数记作 $[x^k]f(x)$ . 系数非零的最高次数 $n$ 称为多项式的 **次数/度**，记作 $\deg f$ . 为了保持关于次数的运算律，规定多项式 $0$ 的次数为 $-\infty$ .

$a_n$ 称为 **首项系数**，若 $a_n=1$ ，称为 **首一多项式**.

记 $\mathbb F$ 上所有多项式函数的集合为 $\mathcal P(\mathbb F)$ (有的地方记作 $\mathbb F[x]$ ) ，其次数小于等于 $m$ 的子集记作 $\mathcal P_m(\mathbb F)$ .

#### 系数的唯一性

容易知道，多项式函数系数的唯一性等价于如下命题

$$f(x)\equiv 0\Leftrightarrow a_k=0$$

该命题的证明留作习题.

## 1. 多项式环

我们可以自然地定义多项式的运算，设

$$A,B\in\mathcal P(\mathbb F)$$

$$A+B=\sum_k(a_k+b_k)x^k$$

$$A\cdot B=\sum_k(\sum_{i+j=k}a_ib_j)x^k$$

可以验证，$(\mathcal P(\mathbb F),+,\cdot)$ 就构成一个交换环。其中零元和幺元即为 $\mathbf 0(x)\equiv 0$ 和 $\mathbf 1(x)\equiv 1$ .

* $(\mathcal P(\mathbb F),+,\cdot)$ 是整环，满足消去律

对于多项式的度，有

$$\deg (A+B)=\max\{\deg A,\deg B\}$$

$$\deg (A\cdot B)=\deg A+\deg B$$

* $f\in\mathcal P(\mathbb F)$ 可逆当且仅当 $f$ 是非零常值多项式

# 2. 多项式的带余除法

#### 引理：整除

设

$$A(x)=\sum_{k=0}^n a_kx^k,B(x)=\sum_{k=0}^m b_kx^k\quad(a_n\not = 0,b_m\not=0,n\geq m)$$

若 $A(x)=B(x)\cdot C(x),\quad C(x)\in\mathcal P(\mathbb F)$ ，则 $C(x)\in\mathcal P_{n-m}(\mathbb F)$ ，且由乘法定义直接可得

$$a_n=b_mc_{n-m}$$

$$a_{n-1}=b_mc_{n-m-1}+b_{m-1}c_{n-m}$$

$$a_{n-k}=\sum_{i=0}^{k}b_{m-k+i}c_{n-m-i}$$

即

$$c_{n-m}=\frac{a_n}{b_m}$$

$$c_{n-m-k}=\frac{a_{n-k}-\sum_{i=0}^{k-1}b_{m-k+i}c_{n-m-i}}{b_m}$$


