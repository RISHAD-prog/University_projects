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
    public partial class CreateAccount : Form
    {
        public CreateAccount()
        {
            InitializeComponent();
        }

        private void panelU_Paint(object sender, PaintEventArgs e)
        {

        }

        private void DesignedByAhnaf_Click(object sender, EventArgs e)
        {

        }

        private void guna2PictureBox2_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void gunaLineTextBox1_TextChanged(object sender, EventArgs e)
        {
            FullName.Visible = true;
            FullName.Visible = false;
        }

        private void guna2PictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void guna2ImageCheckBox1_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void guna2ImageRadioButton1_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void guna2HtmlLabel1_Click(object sender, EventArgs e)
        {

        }

        private void guna2ControlBox3_Click(object sender, EventArgs e)
        {

        }

        private void ButtonCNA_Click(object sender, EventArgs e)
        {
            this.Hide();
            Login f1 = new Login();
            f1.Show();
        }
    }
}
