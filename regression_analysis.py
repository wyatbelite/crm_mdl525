import pandas as pd
import numpy as np
import statsmodels.api as sm
from sklearn.linear_model import LinearRegression
import pymysql

# Koneksi ke database
conn = pymysql.connect(
    host='localhost',
    user='root',
    password='',
    database='db_mdl'
)

# Baca data dari tabel di database
query = "SELECT periklanan, pemasaran_langsung, penjualan FROM tb_promosi INNER JOIN tb_penjualan ON tb_promosi.id_penjualan = tb_penjualan.id_penjualan"
data = pd.read_sql(query, conn)

# Membersihkan data
data['penjualan'] = data['penjualan'].str.replace(r'\D', '')  # Menghapus karakter non-numerik

# Konversi ke tipe data float
data['penjualan'] = data['penjualan'].astype(float)

# Variabel tetap (y) dan variabel bebas (x1, x2, x3)
y = data['penjualan'].values
X = data[['periklanan', 'pemasaran_langsung']].values


# Tambahkan kolom konstanta pada variabel bebas
X = sm.add_constant(X.astype(float))

# Buat model regresi linear berganda
model = sm.OLS(y, X)

# Latih model
result = model.fit()

# Koefisien regresi
coefficients = result.params
#print("Koefisien regresi:")
#print(coefficients)

# Korelasi
correlation_matrix = data[['penjualan', 'periklanan', 'pemasaran_langsung']].corr()
#print("Korelasi:")
#print(correlation_matrix)

# Determinasi
r_squared = result.rsquared
#print("Koefisien determinasi (R-squared):")
#print(r_squared)

# Uji F
f_value = result.fvalue
f_pvalue = result.f_pvalue
#print("Uji F:")
#print("F-value:", f_value)
#print("P-value:", f_pvalue)

# Uji t
t_values = result.tvalues
t_pvalues = result.pvalues
#print("Uji t:")
#print("T-values:")
#print(t_values)
#print("P-values:")
#print(t_pvalues)

# Hasil
thitung = t_values
ttabel = 2.571
signifikansi = t_pvalues

def jadikan_ttabel_negatif(ttabel, thitung):
    return -ttabel if thitung < 0 else ttabel

def uji_pengaruh(thitung, ttabel, signifikansi):
    if signifikansi > 0.05 and abs(thitung) > ttabel:
        return "Pengaruh variabel tersebut berpengaruh namun tidak signifikan terhadap volume penjualan."
    else:
        return "Pengaruh variabel tersebut tidak berpengaruh atau tidak signifikan terhadap volume penjualan."

print("Rekomendasi")

ttabel_periklanan = jadikan_ttabel_negatif(ttabel, thitung[1])
hasil_uji_periklanan = uji_pengaruh(thitung[1], ttabel_periklanan, signifikansi[1])
print("Pengaruh periklanan terhadap volume penjualan:", hasil_uji_periklanan)

ttabel_pemasaran_langsung = jadikan_ttabel_negatif(ttabel, thitung[2])
hasil_uji_pemasaran_langsung = uji_pengaruh(thitung[2], ttabel_pemasaran_langsung, signifikansi[2])
print("Pengaruh pemasaran langsung terhadap volume penjualan:", hasil_uji_pemasaran_langsung)


# Menutup koneksi database
conn.close()
