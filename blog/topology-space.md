# 1. 拓扑

设 $X$ 是一个集合， $\tau\subset 2^X$ ，且满足

$$\begin{aligned}
X,\varnothing\in\tau\\
G_1,G_2\in\tau\Rightarrow G_1 \cup G_2\in\tau\\
G_1,G_2\in\tau\Rightarrow G_1 \cap G_2\in\tau
\end{aligned}$$

则称 $\tau$ 是 $X$ 上的一个 **拓扑**， $(X,\tau)$ 是一个 **拓扑空间** .

$\tau$ 中的元素 $G\in \tau$ 规定为 $(X,\tau)$ 的 **开集** . 开集的余集 $G^c=X-G$ 则称为 $X$ 的 **闭集** ，其全体称为 **闭集族** ，记作 $\sigma$ ，与拓扑 $\tau$ 对应 .

上述定义规定了开集的交和并仍是开集.

事实上，读者可以自证 $\sigma$ 也满足 $\tau$ 需要的条件. 换言之，闭集的交和并仍是闭集. 于是我们可以定义开集是闭集，闭集是开集(?).

拓扑基 $\tau^*$

$$\begin{aligned}
\bigcup_{G\in\tau^*} G=X\\
G_1\cap G_2\not=\varnothing \Rightarrow \exists G\in\tau^*,G\subset G_1\cap G_2
\end{aligned}$$

# 2. 边界点、聚点与极限点

在拓扑空间 $(X,\tau)$ 中，对 $a\in X$ ，如果有一个开集 $G\in\tau$ 满足 $a\in G$ ，则称 $G$ 是 $a$ 的 **邻域** ，记作 $U_a$ . 每个点都至少有一个邻域 $X$ (别笑!).

对 $a$ 所有的邻域 $\{U_a:a\in U_a\}$ ，我们可以从中选出一个子集 $\tau^*(a)$，如果

$$\forall U_a\ni a,\exist U\in\tau^*(a),U\subset U_a$$

我们称 $\tau^*(a)$ 为点 $a$ 的 **邻域基** 。邻域基张成了点 $a$ 的最小邻域族，而不是邻域族。

## 2.1. 边界点

对 $A\subset X$ ，$X$ 被划分为 $A$ 及其余集 $A^c=X-A$ ，我们再从中划分出边界的概念：

如果存在 $a$ 的邻域 $U_a\subset A$ (蕴含 $a\in A$)，则称 $a$ 是 $A$ 的 **内点** ，其全体称作 $A$ 的 **内部** ，记作 $\mathrm{Int} A$ 或 $A^{\circ}$ 或 $A^i$ .

注意到对任意开集 $G\subset A$ ， $\forall a\in G$ 均可以取邻域 $U_a=G\subset A$ ，于是 $x\in A^{\circ}$ ，即 $A$ 中任意开集 $G\subset A^{\circ}$ . 此外，由于 $\forall a\in A^{\circ}$ 可以任取邻域 $U_a$ ，有 $U_a\subset A^{\circ}$ ，于是 $A^{\circ}=\bigcup_{a\in A^{\circ}}U_a$ 是开集. 于是我们有如下结论

$$A^{\circ}\text{是} A \text{中的最大开集，且} A\in\tau\Leftrightarrow A=A^{\circ}$$

$A$ 的余集 $A^c=X-A$ 的内点称作 $A$ 的 **外点** ，其全体称为 **外部** ，记作 $A^e$ .

其余的点称为 **边界点** ，其全体称为 $A$ 的 **边界**，记作 $\partial A$ . 边界点的任意邻域与 $A$ 和 $A^c$ 的交均非空. 形式化地，

$$\forall U_a\ni a,U_a\cap A\not=\varnothing,U_a\cap A^c\not=\varnothing$$

## 2.2. 聚点

对 $A\subset X$ ，如果 $a\in X$ $(\text{不必有}a\in A)$ 满足 $\forall U_a\ni a$ 均有 $(U_a\cap A)-\{a\}\not=\varnothing$ ，则称 $a$ 为 $A$ 的 **聚点** ，其全体称为 $A$ 的 **导集** ，记作 $A'$ . 

易证对 $x\in A^c$，$x\in A'\Leftrightarrow x\in\partial A$ . 换言之，$A'-A=\partial A-A$ ，于是

$$A\cup A'=A\cup\partial A$$

记 $\overline A=A\cup  A'=A\cup\partial A$ 称为 $A$ 的 **闭包** . 如果 $\overline A=X$ ，则称 $A$ 是 $X$ 的 **稠密子集** .

$$\overline A\text{是包含} A \text{最小闭集，且} A\in\sigma\Leftrightarrow A=\overline A$$

闭包性质和拓扑的一一对应

# 3. 连续映射

## 3.1. 极限点

如果一个点列 $\{x_n\}_{n=1}^{\infty}$ 满足

$$\forall U_x\ni x,\exist N,\textrm{s.t. }\forall n>N,x_n\in U_x$$

则称 $\{x_n\}_{n=1}^{\infty}$ 收敛于 $x$ ，记作 $\lim_{n\rightarrow +\infty}x_n=x$

* [定理] 设 $(X,\tau)$ 是拓扑空间，$A\in \sigma$ ，则对 $X_n\in A$ ，有 $\lim_{n\rightarrow +\infty}x_n\in A$

## 3.2. 连续映射

回忆一元微积分中的连续性的定义，设实轴度量空间上有函数 $f:\mathbb R\rightarrow\mathbb R$ ，连续即是

$$\lim_{x\rightarrow x_0}f(x)=f(x_0)$$

展开来讲，

$$\forall \varepsilon>0,\exists \delta>0,\textrm{s.t. }\forall x(|x-x_0|<\delta),|f(x)-f(x_0)|<\varepsilon$$

将度量换成邻域。

$$\forall U(f(x_0),\varepsilon),\exist U(x_0,\delta),\textrm{s.t. }\forall x\in U(x_0,\delta),f(x)\in U(f(x_0),\varepsilon)$$

我们这里舍弃度量，推广出拓扑空间中的连续性

设 $(X,\tau_1),(Y,\tau_2)$ 是拓扑空间，设 $x_0\in X$ 如果映射 $f:X\rightarrow Y$ 满足

$$\forall U_y\ni f(x_0),\exists U_x\ni x_0,\textrm{s.t. }f(U_x)\subset U_y$$

则称 $f$ **在 $x_0$ 连续**。如果 $f$ 在 $\forall x\in X$ 上连续，则称 $f$ 是 **连续映射**。

以下 $4$ 个命题是等价的

* $f$ 是连续映射

* $\forall A\in\tau_2\Rightarrow f^{-1}(A)\in\tau_1$

* $\forall A\in\sigma_2\Rightarrow f^{-1}(A)\in\sigma_1$

* $\forall A\subset X,f(\overline A)\subset\overline{f(A)}$

如果 $f$ 是连续映射，那么对 $X$ 中的点列 $\{x_n\}$

$$\lim_{n\rightarrow +\infty}f(x_n)=f(\lim_{n\rightarrow +\infty}x_n)$$

在度量空间中，有该定理的逆命题成立，但在拓扑空间中逆命题并不成立。

## 3.3. 同胚

设 $(X,\tau_1),(Y,\tau_2)$ 是拓扑空间，如果映射 $f:X\rightarrow Y$ 是连续映射且是双射，且 $f^{-1}:Y\rightarrow X$ 也是连续映射，则称 $f$ 是一个 **同胚映射**。

如果存在一个同胚映射 $f:X\rightarrow Y$ ，则称拓扑空间 $X$ 和 $Y$ 是 **同胚** 的，记作 $X\cong Y$

同胚映射保持的性质称为 **拓扑性质**

# 4. 连通

不能被表示为开集的无交并

连通分支

连通 道路连通 折线连通

# 5. 可数

如果拓扑空间 $(X,\tau)$ 的每一个点存在一个可数的邻域基，则称为 **第一可数空间** ，简称 **$\rm A_1$ 空间**

如果拓扑空间 $(X,\tau)$ 存在一个可数的拓扑基，则称为 **第二可数空间** ，简称 **$\rm A_2$ 空间**

离散拓扑空间显然是 $\rm A_1$ 空间。但其拓扑基要包含所有独点集，因此在其大小不可数时不是 $\rm A_2$ 空间。

### 定理

$$\rm A_2\Rightarrow A_1$$

$\rm A_2\Rightarrow$ 有可数稠密子集

$\rm A_2$ 开覆盖可数

如果度量空间有可数稠密子集，则称为 **可分度量空间**

当 $(X,\rho)$ 是可分度量空间时，取 $Y$ 为 $(X,\tau(\rho))$ 的可数稠密子集，可数球形邻域族 $\{U(y,r):y\in Y,r\in\mathbb Q\}$ 作为 $(X,\tau(\rho))$ 的邻域基，可知 $(\Leftarrow)$ 也成立

# 6. 可分

$\rm T_0$ 空间 任意两点至少有一点有不包含另一点的邻域

$\rm T_1$ 空间 任意两点均有不包含另一点的邻域 $\Leftrightarrow$ 独点是闭集

$\rm T_2$ 空间 **$\rm Hausdoff$ 空间** 任意两点有不相交邻域

**正则空间** 任意不相交一点和一闭集有不相交邻域

**正规空间** 任意两不相交闭集有不相交邻域

$\rm T_3$ 空间 **正则** 的 $\rm T_1$ 空间

$\rm T_4$ 空间 **正规** 的 $\rm T_1$ 空间

$$\rm T_4\Rightarrow T_3\Rightarrow T_2\Rightarrow T_1\Rightarrow T_0$$

# 6. 紧致

列紧 无限子集必有聚点

覆紧
