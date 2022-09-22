using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Threshold_of_Islam
{
    public partial class Login : Form
    {
        public Login()
        {
            InitializeComponent();
        }

        private void guna2PictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void guna2PictureBox2_Click(object sender, EventArgs e)
        {

        }

        private void guna2TextBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void guna2Button1_Click(object sender, EventArgs e)
        {
            this.Hide();
            CreateAccount f2 = new CreateAccount();
            f2.Show();
        }

        private void pictureBoxHidePass_MouseClick(object sender, MouseEventArgs e)
        {
            textpasslog.UseSystemPasswordChar = false;
            pictureBoxHidePass.Visible = false;
            pictureBoxShowPass.Visible = true;
        }

        private void pictureBoxShowPass_MouseClick(object sender, MouseEventArgs e)
        {
            textpasslog.UseSystemPasswordChar = true;
            pictureBoxHidePass.Visible = true;
            pictureBoxShowPass.Visible = false;
        }

        private void textpasslog_MouseClick(object sender, MouseEventArgs e)
        {
            pictureBoxHidePass.Visible = true;
            textpasslog.UseSystemPasswordChar = true;
        }

        private void textEmaillog_MouseClick(object sender, MouseEventArgs e)
        {
            pictureBoxHidePass.Visible = false;
            pictureBoxShowPass.Visible = false;
        }

        private void label2_MouseClick(object sender, MouseEventArgs e)
        {
            textEmailAdmin.Visible = false;
            textpassAdmin.Visible = false;
            ButtonAdminLogin.Visible = false;
            textEmaillog.Visible = true;
            textpasslog.Visible = true;
            ButtonUserLogin.Visible = true;
            label1.Visible = true;
            ButtonCNA.Visible = true;
            panelU.Visible = true;
            panelA.Visible = false;
            pictureBoxHidePassAd.Visible = false;
            pictureBoxShowPassAd.Visible = false;
            pictureBoxHidePass.Visible = false;
            pictureBoxShowPass.Visible = false;
        }

        private void label3_MouseClick(object sender, MouseEventArgs e)
        {
            textEmailAdmin.Visible = true;
            textpassAdmin.Visible = true;
            ButtonAdminLogin.Visible = true;
            textEmaillog.Visible = false;
            textpasslog.Visible = false;
            ButtonUserLogin.Visible = false;
            label1.Visible = false;
            ButtonCNA.Visible = false;
            panelU.Visible = false;
            panelA.Visible = true;
            pictureBoxHidePassAd.Visible = false;
            pictureBoxShowPassAd.Visible = false;
            pictureBoxHidePass.Visible = false;
            pictureBoxShowPass.Visible = false;
        }

        private void pictureBoxHidePassAd_MouseClick(object sender, MouseEventArgs e)
        {
            textpasslog.UseSystemPasswordChar = false;
            pictureBoxShowPassAd.Visible = false;
            pictureBoxHidePassAd.Visible = true;
        }

        private void textpassAdmin_MouseClick(object sender, MouseEventArgs e)
        {
            pictureBoxHidePass.Visible = true;
            textpasslog.UseSystemPasswordChar = true;
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void ButtonAdminLogin_Click(object sender, EventArgs e)
        {
            
        }

        private void textEmailAdmin_TextChanged(object sender, EventArgs e)
        {

        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void ButtonUserLogin_Click(object sender, EventArgs e)
        {
            this.Hide();
            HomePage f3 = new HomePage();
            f3.Show();
        }

        private void pictureBoxShowPassAd_Click(object sender, EventArgs e)
        {

        }

        private void panelU_Paint(object sender, PaintEventArgs e)
        {

        }

        private void panelA_Paint(object sender, PaintEventArgs e)
        {

        }

        private void pictureBoxHidePass_Click(object sender, EventArgs e)
        {

        }

        private void textpassAdmin_TextChanged(object sender, EventArgs e)
        {

        }

        private void label3_Click(object sender, EventArgs e)
        {

        }

        private void pictureBoxHidePassAd_Click(object sender, EventArgs e)
        {

        }

        private void pictureBoxShowPass_Click(object sender, EventArgs e)
        {

        }

        private void textpassAdmin_MouseClick_1(object sender, MouseEventArgs e)
        {
            pictureBoxHidePassAd.Visible = true;
            textpassAdmin.UseSystemPasswordChar = true;
        }

        private void textEmailAdmin_MouseClick(object sender, MouseEventArgs e)
        {
            pictureBoxHidePassAd.Visible = false;
            pictureBoxShowPassAd.Visible = false;
        }

        private void pictureBoxShowPassAd_MouseClick(object sender, MouseEventArgs e)
        {
            textpassAdmin.UseSystemPasswordChar = true;
            pictureBoxHidePassAd.Visible = true;
            pictureBoxShowPassAd.Visible = false;
        }

        private void pictureBoxHidePassAd_MouseClick_1(object sender, MouseEventArgs e)
        {
            textpassAdmin.UseSystemPasswordChar = false;
            pictureBoxHidePassAd.Visible = false;
            pictureBoxShowPassAd.Visible = true;
        }

        private void Login_Load(object sender, EventArgs e)
        {
            guna2ShadowForm1.SetShadowForm(this);
            
            
        }
    }
}
