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
    public partial class To_Do_List : Form
    {
        public To_Do_List()
        {
            InitializeComponent();
        }

        private void iconButton1_Click(object sender, EventArgs e)
        {
            this.Hide();
            HomePage f1 = new HomePage();
            f1.Show();
        }

        private void gunaCircleProgressBar1_Click(object sender, EventArgs e)
        {

        }

        private void guna2GradientButton1_Click(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Value = 0;
             if (guna2ToggleSwitch1.Checked == true) { timer1.Start(); }
             if (guna2ToggleSwitch2.Checked == true) { timer2.Start(); }
             if (guna2ToggleSwitch3.Checked == true) { timer3.Start(); }
             if (guna2ToggleSwitch4.Checked == true) { timer4.Start(); }
             if (guna2ToggleSwitch5.Checked == true) { timer5.Start(); }
             if (guna2ToggleSwitch6.Checked == true) { timer6.Start(); }
             if (guna2ToggleSwitch8.Checked == true) { timer7.Start(); }
           
            else if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch2.Checked == true )
            { timer8.Start(); }
            else if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch3.Checked == true)
            { timer9.Start(); }
            else if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch4.Checked == true)
            { timer10.Start(); }
            else if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch5.Checked == true)
            { timer11.Start(); }
            else if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch6.Checked == true)
            { timer12.Start(); }
            else if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch8.Checked == true)
            { timer13.Start(); }
            else if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch2.Checked == true && guna2ToggleSwitch3.Checked == true)
            { timer14.Start(); }

            /*else if (guna2ToggleSwitch2.Checked == true && guna2ToggleSwitch1.Checked == true)
            {

                gunaCircleProgressBar1.Value = 100;
                timer1.Stop();
            }
            else if (guna2ToggleSwitch2.Checked == true && guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch3.Checked == true)
            {
                gunaCircleProgressBar1.Value = 150;
                timer1.Stop();
            }
            else if (guna2ToggleSwitch2.Checked == true && guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch3.Checked == true && guna2ToggleSwitch4.Checked == true)
            {
                gunaCircleProgressBar1.Value = 200;
                timer1.Stop();
            }
            else if (guna2ToggleSwitch2.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer1.Stop();
            }

            else if (guna2ToggleSwitch3.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer1.Stop();
            }

            else if (guna2ToggleSwitch4.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer1.Stop();
            }
            else if (guna2ToggleSwitch2.Checked == true && guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch3.Checked == true && guna2ToggleSwitch4.Checked == true && guna2ToggleSwitch5.Checked == true)
            {
                gunaCircleProgressBar1.Value = 250;
                timer1.Stop();
            }
            else if (guna2ToggleSwitch2.Checked == true && guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch3.Checked == true && guna2ToggleSwitch4.Checked == true && guna2ToggleSwitch5.Checked == true && guna2ToggleSwitch6.Checked == true)
            {
                gunaCircleProgressBar1.Value = 300;
                timer1.Stop();
            }
            else if (guna2ToggleSwitch2.Checked == true && guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch3.Checked == true && guna2ToggleSwitch4.Checked == true && guna2ToggleSwitch5.Checked == true && guna2ToggleSwitch6.Checked == true && guna2ToggleSwitch8.Checked == true)
            {
                gunaCircleProgressBar1.Value = 350;
                timer1.Stop();
            }
            else if (guna2ToggleSwitch5.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer1.Stop();
            }

            else if (guna2ToggleSwitch6.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer1.Stop();
            }

            else if (guna2ToggleSwitch8.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer1.Stop();
            }*/


        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch1.Checked == true )
            {
                gunaCircleProgressBar1.Value = 50;
               
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer1.Stop();
            }
        }

        private void guna2ToggleSwitch1_CheckedChanged(object sender, EventArgs e)
        {
            
            
        }

        private void guna2ToggleSwitch2_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void guna2ToggleSwitch8_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void guna2ToggleSwitch6_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void guna2ToggleSwitch5_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void guna2ToggleSwitch4_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void guna2ToggleSwitch3_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void guna2ControlBox1_Click(object sender, EventArgs e)
        {
            timer1.Start();
        }

        private void guna2ControlBox2_Click(object sender, EventArgs e)
        {
            timer1.Start();
        }

        private void To_Do_List_Load(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Value = 0;
        }

        private void timer2_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch2.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer2.Stop();
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer2.Stop();
            }
        }

        private void timer3_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch3.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer3.Stop();
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer3.Stop();
            }
        }

        private void timer4_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch4.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer4.Stop();
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer4.Stop();
            }
        }

        private void timer5_Tick(object sender, EventArgs e)
        {
           gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch5.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer5.Stop();
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer5.Stop();
            }
        }

        private void timer6_Tick(object sender, EventArgs e)
        {
           gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch6.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer6.Stop();
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer6.Stop();
            }
        }

        private void timer7_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch8.Checked == true)
            {
                gunaCircleProgressBar1.Value = 50;
                timer7.Stop();
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer7.Stop();
            }
        }

        private void timer8_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch2.Checked == true )
            {
                gunaCircleProgressBar1.Value = 100;
                
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer8.Stop();
            }
        }

        private void timer9_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch3.Checked == true)
            {
                gunaCircleProgressBar1.Value = 100;
                
            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer9.Stop();
            }
        }

        private void timer10_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch4.Checked == true)
            {
                gunaCircleProgressBar1.Value = 100;

            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer10.Stop();
            }
        }

        private void timer11_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch5.Checked == true)
            {
                gunaCircleProgressBar1.Value = 100;

            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer11.Stop();
            }
        }

        private void timer12_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch6.Checked == true)
            {
                gunaCircleProgressBar1.Value = 100;

            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer12.Stop();
            }
        }

        private void timer13_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch8.Checked == true)
            {
                gunaCircleProgressBar1.Value = 100;

            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer13.Stop();
            }
        }

        private void timer14_Tick(object sender, EventArgs e)
        {
            gunaCircleProgressBar1.Increment(1);
            if (guna2ToggleSwitch1.Checked == true && guna2ToggleSwitch2.Checked == true && guna2ToggleSwitch3.Checked == true)
            {
                gunaCircleProgressBar1.Value = 150;

            }
            else
            {
                gunaCircleProgressBar1.Value = 0;
                timer14.Stop();
            }
        }
    }
}
